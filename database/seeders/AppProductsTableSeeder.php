<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_products')->delete();
        
        \DB::table('app_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'combination_id' => NULL,
                'title' => 'This is dummy title',
                'slug' => 'this-is-dummy-title',
                'tags' => 'tag1,tag3',
                'is_variable' => 0,
                'dfinder_status' => 0,
                'diamond_shape' => NULL,
                'short_description' => '<p>short description</p>',
                'description' => '<p><span style="font-weight: 700; font-size: 1rem;">Description</span><br></p>',
                'sale_price' => NULL,
                'regular_price' => NULL,
                'meta_title' => 'meta title',
                'meta_keyword' => 'meta keyword',
                'meta_description' => 'this is description',
                'is_featured' => 0,
                'is_taxable' => 0,
                'stock_status' => 1,
                'status' => 0,
                'is_draft' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-09 10:59:29',
                'updated_at' => '2022-09-09 10:59:29',
            ),
        ));
        
        
    }
}