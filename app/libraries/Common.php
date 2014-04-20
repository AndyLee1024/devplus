<?php
     namespace App\Libraries;
     
     class Common
     {
       static public function getFirstImg($sContent){
   	    	$regs = array();
		    if (preg_match( "<img.*src=[\"](.*?)[\"].*?>", $sContent, $regs ) ) { //使用正则获取第一幅图像地址 
			    return $obj = $regs[1] ; 
			} else{
				return "/static/img/default.jpg";
			}
   	    }
     }