<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->truncate();
		DB::table('product_categories')->truncate();
		
	
		
		//DB::unprepared(file_get_contents(__DIR__ . '/products.sql'));
    }
}
