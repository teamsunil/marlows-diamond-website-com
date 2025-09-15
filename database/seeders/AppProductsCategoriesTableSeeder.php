<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppProductsCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_products_categories')->delete();
        
        \DB::table('app_products_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => '1',
                'category_id' => '2',
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-09 10:59:29',
                'updated_at' => '2022-09-09 10:59:29',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => '1',
                'category_id' => '3',
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-09 10:59:29',
                'updated_at' => '2022-09-09 10:59:29',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => '1',
                'category_id' => '4',
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-09 10:59:29',
                'updated_at' => '2022-09-09 10:59:29',
            ),
        ));
        
        
    }
}