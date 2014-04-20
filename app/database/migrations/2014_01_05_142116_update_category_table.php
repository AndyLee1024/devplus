<?php

use Illuminate\Database\Migrations\Migration;
 

class UpdateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('article_category', function($table)
		{
		    $table->string('category_alias');
		});
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "programming";
		$oCategory->category_name = "编程语言";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 0;
		$oCategory->state = 0;
		$oCategory->color = "green";
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "php";
		$oCategory->category_name = "PHP";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "java";
		$oCategory->category_name = "Java";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "cpp";
		$oCategory->category_name = "C++";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		

		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "delphi";
		$oCategory->category_name = "Delphi";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "python";
		$oCategory->category_name = "Python";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "clang";
		$oCategory->category_name = "Clang";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "dotnet";
		$oCategory->category_name = ".Net";
		$oCategory->category_description = "编程语言的描述";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "nodejs";
		$oCategory->category_name = "NodeJs";
		$oCategory->category_description = "NodeJs";
		$oCategory->level = 1;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oWeb = new ArticleCategory();
		$oWeb->guid = Uuid::v4();
		$oWeb->category_alias = "Web";
		$oWeb->category_name = "Web前端";
		$oWeb->category_description = "Web前端";
		$oWeb->level = 0;
		$oWeb->color = "orange";
		$oWeb->state = 0;
		$oWeb->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "html5-css";
		$oCategory->category_name = "Html5/Css";
		$oCategory->category_description = "html5css";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "Javascript-Jquery";
		$oCategory->category_name = "Js/Jquery";
		$oCategory->category_description = "vJquery";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "Sass-Less";
		$oCategory->category_name = "Sass/Less";
		$oCategory->category_description = "Sass/Less";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "css3";
		$oCategory->category_name = "Css3";
		$oCategory->category_description = "Css3";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "canvas";
		$oCategory->category_name = "Canvas";
		$oCategory->category_description = "Canvas";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "ajax";
		$oCategory->category_name = "AJax";
		$oCategory->category_description = "AJax";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "Emberjs";
		$oCategory->category_name = "Emberjs";
		$oCategory->category_description = "Emberjs";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "angularjs";
		$oCategory->category_name = "angularjs";
		$oCategory->category_description = "angularjs";
		$oCategory->level = $oWeb->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oS = new ArticleCategory();
		$oS->guid = Uuid::v4();
		$oS->category_alias = "os";
		$oS->category_name = "操作系统";
		$oS->category_description = "os";
		$oS->color = "red";
		$oS->level = 0;
		$oS->state = 0;
		$oS->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "linux";
		$oCategory->category_name = "Linux";
		$oCategory->category_description = "Linux";
		$oCategory->level = $oS->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "windows";
		$oCategory->category_name = "Windows";
		$oCategory->category_description = "windows";
		$oCategory->level = $oS->category_id;
		$oCategory->state = 0;
		$oCategory->save();

		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "windowsserver";
		$oCategory->category_name = "Windows-Server";
		$oCategory->category_description = "windowsserver";
		$oCategory->level = $oS->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		

		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "osx";
		$oCategory->category_name = "OSX";
		$oCategory->category_description = "OSX";
		$oCategory->level = $oS->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "unix";
		$oCategory->category_name = "Unix";
		$oCategory->category_description = "Unix";
		$oCategory->level = $oS->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oDatabase = new ArticleCategory();
		$oDatabase->guid = Uuid::v4();
		$oDatabase->category_alias = "database";
		$oDatabase->category_name = "数据库";
		$oDatabase->category_description = "database";
		$oDatabase->level = 0;
		$oDatabase->state = 0;
		$oDatabase->color = "yellow";
		$oDatabase->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "mysql";
		$oCategory->category_name = "MySQL";
		$oCategory->category_description = "mysql";
		$oCategory->level = $oDatabase->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "mssql";
		$oCategory->category_name = "MsSQL";
		$oCategory->category_description = "MsSQL";
		$oCategory->level = $oDatabase->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "oracle";
		$oCategory->category_name = "Oracle";
		$oCategory->category_description = "Oracle";
		$oCategory->level = $oDatabase->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "nosql";
		$oCategory->category_name = "NoSQL";
		$oCategory->category_description = "nosql";
		$oCategory->level = $oDatabase->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "otherdb";
		$oCategory->category_name = "其他数据库";
		$oCategory->category_description = "otherdb";
		$oCategory->level = $oDatabase->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oApp = new ArticleCategory();
		$oApp->guid = Uuid::v4();
		$oApp->category_alias = "app";
		$oApp->category_name = "App开发";
		$oApp->category_description = "app";
		$oApp->level = 0;
		$oApp->state = 0;
		$oApp->color = "orange-d";
		$oApp->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "android";
		$oCategory->category_name = "Android";
		$oCategory->category_description = "Android";
		$oCategory->level = $oApp->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "ios";
		$oCategory->category_name = "iOS";
		$oCategory->category_description = "ios";
		$oCategory->level = $oApp->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "winphone";
		$oCategory->category_name = "WindowsPhone";
		$oCategory->category_description = "WindowsPhone";
		$oCategory->level = $oApp->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "othermobile";
		$oCategory->category_name = "其他移动系统开发";
		$oCategory->category_description = "othermobile";
		$oCategory->level = $oApp->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oWebserver = new ArticleCategory();
		$oWebserver->guid = Uuid::v4();
		$oWebserver->category_alias = "webserver";
		$oWebserver->category_name = "Web服务器";
		$oWebserver->category_description = "webserver";
		$oWebserver->level = 0;
		$oWebserver->color = "cyan";
		$oWebserver->state = 0;
		$oWebserver->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "nginx";
		$oCategory->category_name = "Nginx";
		$oCategory->category_description = "Nginx";
		$oCategory->level = $oWebserver->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "apache";
		$oCategory->category_name = "Apache";
		$oCategory->category_description = "apache";
		$oCategory->level = $oWebserver->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "iis";
		$oCategory->category_name = "IIS";
		$oCategory->category_description = "iis";
		$oCategory->level = $oWebserver->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "lighttpd";
		$oCategory->category_name = "Lighttpd";
		$oCategory->category_description = "lighttpd";
		$oCategory->level = $oWebserver->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oSoft = new ArticleCategory();
		$oSoft->guid = Uuid::v4();
		$oSoft->category_alias = "softview";
		$oSoft->category_name = "软件设计";
		$oSoft->category_description = "softview";
		$oSoft->level = 0;
		$oSoft->color = "green-l";
		$oSoft->state = 0;
		$oSoft->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "design";
		$oCategory->category_name = "软件架构";
		$oCategory->category_description = "design";
		$oCategory->level = $oSoft->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "mvc";
		$oCategory->category_name = "面向对象";
		$oCategory->category_description = "mvc";
		$oCategory->level = $oSoft->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "softdisign";
		$oCategory->category_name = "设计模式";
		$oCategory->category_description = "softdisign";
		$oCategory->level = $oSoft->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "agile";
		$oCategory->category_name = "敏捷开发";
		$oCategory->category_description = "agile";
		$oCategory->level = $oSoft->category_id;
		$oCategory->state = 0;
		$oCategory->save();
		
		$oCategory = new ArticleCategory();
		$oCategory->guid = Uuid::v4();
		$oCategory->category_alias = "softother";
		$oCategory->category_name = "其他";
		$oCategory->category_description = "softother";
		$oCategory->level = $oSoft->category_id;
		$oCategory->state = 0;
		$oCategory->save();	
		
		
		
		
		
		
		
		
		
	
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('article_category', function($table)
		{
		     $table->dropColumn('category_alias');
		});
	}

}