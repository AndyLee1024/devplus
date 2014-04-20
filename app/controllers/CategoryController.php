<?php
/**
 * @name 分类  
 * @author AndyLee <leefongyun@gmail.com>
 */
class CategoryController extends BaseController{
	public function getAlias($alias){		
		if(isset($alias)){
			$oInfo = ArticleCategory::where('category_alias', $alias)->select('level','category_id','category_name')
			    ->first();
			if($oInfo->level == 0){
				$oList = $this->_getArticle($oInfo->category_id, 0, $oInfo);
			}else{
				$oList = $this->_getArticle($oInfo->category_id, 1, $oInfo);
			}					
			return View::make("category")->with('article_list', $oList);

		}else{
			 return Redirect::to("/");
		}
	
	}
	
	/**
	 * @name 根据category id来获取文章信息
	 * @param int $cid
	 * @param int $level
	 * @param obj $cinfo
	 * @author AndyLee <leefongyun@gmail.com>
	 */
	public function _getArticle($cid, $level, $cinfo){
	    //子分类
		if($level != 0){
			$oList = ArticleInfo::whereRaw('category = ? and state = ?', array($cid,0))->paginate(25);
			$oList->count =  ArticleInfo::whereRaw('category = ? and state = ?', array($cid,0))->count();
		}else{
			$oCs = ArticleCategory::where('level',$cid)->select('category_id')->get();
			$arr = array();
			foreach ($oCs as $c){
				$arr[] = $c->category_id;
			}
			$oList = ArticleInfo::whereIn('category', $arr)->where('state',0)->paginate(25);
			$oList->count =  ArticleInfo::whereIn('category',$arr)
			->where('state',0)
			->count();
		}
		$oList->title = $cinfo->category_name;
	 
		foreach($oList as $m){
			$m->img= ArticleContent::find($m->article_id)->thumb_image;
			$tags = ArticleTagList::where('article_id', $m->article_id)->get();
			foreach($tags as $v){
				$tag = ArticleTag::find($v->tag_id);
				$v->tag_name = $tag->tag_name;
				$v->tag_id = $tag->tag_id;
			}
			$m->tags = $tags;
		}
		
		return $oList;
	}
}
?>