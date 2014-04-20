<?php

   namespace App\Push;
   use App\Libraries\Common;
 
  /**
    * @name 检测push数据并入库
    * @author AndyLee <leefongyun@gmail.com> 
    * @access private
    * @category push
    * @version 1.0
    */
   
   class SaveController extends BaseController
   {
   	    public function filterPost(){
   	    	//获取push数据
   	    	$arrInputs = \Input::Only("category","from","description","tags","title","content","author");
   	    	//验证规则
   	    	$arrRules = array(
   	    	     "category" => "required|integer|min:2",
   	    		 "from" => "required",
   	    		 "description" => "required|max:256",
   	    		 "title" =>"required|max:100",
   	    		 "content" => "required",
   	    	);
   	    	
   	    	$validator = \Validator::make($arrInputs, $arrRules);
   	    	if($validator->fails()){
   	    		    \App::abort($validator->messages()->first());
   	    	}
   	    	
   	    	$oArticleInfo = new \ArticleInfo();
   	    	$oArticleInfo->article_guid = \Uuid::v4(false);
   	    	$oArticleInfo->title = trim($arrInputs["title"]);
   	    	$oArticleInfo->category = $arrInputs["category"];
   	    	$oArticleInfo->description = trim($arrInputs["description"]);
   	    	$oArticleInfo->author = $arrInputs["author"];
   	    	$oArticleInfo->origin = 1;
   	    	$oArticleInfo->state = 0;
   	    	$oArticleInfo->save();
   	        
   	    	$oArticleContent = new \ArticleContent();
   	    	$oArticleContent->article_id = $oArticleInfo->article_id;
   	    	$oArticleContent->content = trim($arrInputs["content"]);
   	    	$oArticleContent->thumb_image = Common::getFirstImg($arrInputs["content"]);
   	    	$oArticleContent->save();
   	    	
   	        $arrTags = explode(",", $arrInputs['tags']);
   	        if(!empty($arrTags)){
   	        	foreach($arrTags as $m){
   	        		$m = trim($m);
   	                if(!empty($m)){
   	        		$oTag = \ArticleTag::where("tag_name",$m)->first();
   	        		if($oTag){ //存在标签 添加和文章对应关系并且更新 tag_user_count
   	        			   $oTagList = new \ArticleTagList();
   	        			   $oTagList->article_id = $oArticleInfo->article_id;
   	        			   $oTagList->tag_id = $oTag->tag_id;
   	        			   $oTagList->save();
   	        			   
   	        			   $oCurrentTag = \ArticleTag::find($oTag->tag_id);
   	        			   $oCurrentTag->tag_used_count = $oCurrentTag->tag_used_count+1;
   	        			   $oCurrentTag->save();
   	        		}else{
   	        			  //不存在 先插入tag
   	        			  $oTag = new \ArticleTag();
   	        			  $oTag->guid = \Uuid::v4();
   	        			  $oTag->tag_name = $m;
   	        			  $oTag->tag_used_count = 0;
   	        			  $oTag->save();
   	        			  
   	        			  $oTagList = new \ArticleTagList();
   	        			  $oTagList->article_id = $oArticleInfo->article_id;
   	        			  $oTagList->tag_id = $oTag->tag_id;
   	        			  $oTagList->save();
   	        			  
   	        			  $oCurrentTag = \ArticleTag::find($oTag->tag_id);
   	        			  $oCurrentTag->tag_used_count = $oCurrentTag->tag_used_count+1;
   	        			  $oCurrentTag->save();
   	        		}}
   	        	}
   	        }
   	    	
   	    	echo "successed";
   	    }
   	    
   	    
  
   }