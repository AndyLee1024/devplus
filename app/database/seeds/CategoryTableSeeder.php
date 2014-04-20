<?php
    use App\Models\ArticleCategory;
    
	class CategoryTableSeeder extends Seeder {
	
		public function run()
		{
			ArticleCategory::create(array(
			   'guid' => Uuid::v4(),
			   'category_name'=> '编程语言',
			   'level'=>0,
			   'order'=>0,
			   'state'=>0
			));
			
			ArticleCategory::create(array(
			'guid' => Uuid::v4(),
			'category_name'=> 'php',
			'level'=>1,
			'order'=>0,
			'state'=>0
			));
			
		}
	
	}