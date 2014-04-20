<?php
/**
      * @name 文章查询显示
      * @author Andy Lee <leefongyun@gmail.com>
      * @access  public 
      * @package app
      * @version 1.0
      */
     class ContentController extends BaseController{
     	/**
     	 * 
     	 * @name 获取父类 
     	 * @param unknown $cid 
     	 * @author AndyLee <leefongyun@gmail.com>
     	 */
     	public function _getParentCategory($cid){
     		$oCategory = ArticleCategory::find($cid);
     		$oParent = ArticleCategory::find($oCategory->level);
     		return "<li><a href=\"".action('CategoryController@getAlias',$oParent->category_alias)."\">"
     		.$oParent->category_name."</a></li><li><a href=\"".
     		action('CategoryController@getAlias',$oCategory->category_alias)."\">".$oCategory->category_name."</a></li>";
     	}
     	/**
     	 * 显示文章
     	 * @param Guid
     	 * @see Controller::getShowArticle()
     	 */
     	public function getShowArticle($sGuid){
     		 if(!empty($sGuid) and strlen($sGuid)>20){
                     $oArticleInfo = ArticleInfo::where("article_guid",$sGuid)->first();
                     $oNextInfo = ArticleInfo::find($oArticleInfo->article_id+1);
                     if(!empty($oNextInfo)){
                     	$oNextInfo->tags = ArticleTagList::where("article_id",$oNextInfo->article_id)->get();
                     	if(!empty($oNextInfo->tags)){
                     		foreach ($oNextInfo->tags as $k){
                     			$tag = ArticleTag::find($k->tag_id);
                     			$k->tag_name = $tag->tag_name;
                     			$k->tag_id = $tag->tag_id;
                     		}
                     	}
                     }else{
                     	$oNextInfo = "";
                     }
                     if(!empty($oArticleInfo)){
                     	   $oArticleContent = ArticleContent::find($oArticleInfo->article_id);
                     	   $oArticleTag = ArticleTagList::where("article_id",$oArticleInfo->article_id)->get();
                     	   if(!empty($oArticleTag)){
                     	   	   foreach ($oArticleTag as $k){
                     	   	   	   $tag = ArticleTag::find($k->tag_id);
                     	   	   	   $k->tag_name = $tag->tag_name;
                     	   	   	   $k->tag_id = $tag->tag_id;
                     	   	   }
                     	   }
                     	   
                     	   $category = $this->_getParentCategory($oArticleInfo->category);
                     	   return View::make("article")->with("content",$oArticleContent)->with("tags",$oArticleTag)
                     	   ->with("info",$oArticleInfo)
                     	   ->with("category",$category)
                     	   ->with("nextinfo",$oNextInfo);
                     	
                     	
                     }else{
                     	App::abort("the article does not exist");
                     }
     		 }else{
     		 	 
     		 	 return Redirect::to("/");
     		 }
     	}
     }