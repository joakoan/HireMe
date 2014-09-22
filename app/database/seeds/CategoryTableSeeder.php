<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use HireMe\Entities\Category;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();

		Category::create([
			'id' 	=>1,
			'name' 	=>'Backend Developers',
			'slug'	=>'backend-developers'
		]);
		Category::create([
			'id' 	=> 2,
			'name' 	=>'Frontend developers',
			'slug'	=>'frontend-developers'
		]);
		Category::create([
			'id' 	=> 3,
			'name' 	=>'Designers',
			'slug'	=>'designers'
		]);
	}

}