<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
 		return View::make('home');
	}
	
	public static function getNavs(){
		$oNavs = ArticleCategory::where('level', 0)->get();
		$aNavs = new stdClass();
		$i = 2;
		foreach($oNavs as $nav){
			$iPid = $nav->category_id;
			$oChindNavs = ArticleCategory::where('level', $iPid)->get();
			$aNavs->parent = $nav;
			$aNavs->parent->count = $i;
			$aNavs->parent->child = $oChindNavs;
			$i++;
		}
		return $oNavs;
	}
	
 

}