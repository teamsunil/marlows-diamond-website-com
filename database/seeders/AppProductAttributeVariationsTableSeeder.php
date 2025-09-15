<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppProductAttributeVariationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_product_attribute_variations')->delete();
        
        \DB::table('app_product_attribute_variations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => NULL,
                'product_id' => '1',
                'sale_price' => '99',
                'regular_price' => '100',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-13 10:08:38',
                'updated_at' => '2022-09-13 11:05:03',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => NULL,
                'product_id' => '1',
                'sale_price' => '200',
                'regular_price' => '350',
                'in_stock' => 0,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-13 10:29:53',
                'updated_at' => '2022-09-13 10:54:05',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => NULL,
                'product_id' => '1',
                'sale_price' => '300',
                'regular_price' => '450',
                'in_stock' => 0,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-13 10:29:53',
                'updated_at' => '2022-09-13 11:03:51',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => NULL,
                'product_id' => '1',
                'sale_price' => '55',
                'regular_price' => '110',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-13 11:08:32',
                'updated_at' => '2022-09-13 11:08:32',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => NULL,
                'product_id' => '2',
                'sale_price' => '2430',
                'regular_price' => '2430',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-14 09:43:11',
                'updated_at' => '2022-09-15 05:42:05',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => NULL,
                'product_id' => '2',
                'sale_price' => '0',
                'regular_price' => '1500',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 13:13:15',
                'updated_at' => '2022-09-15 05:42:05',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => NULL,
                'product_id' => '2',
                'sale_price' => '2430',
                'regular_price' => '2430',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 06:50:45',
                'updated_at' => '2022-09-15 07:05:35',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => NULL,
                'product_id' => '2',
                'sale_price' => '2430',
                'regular_price' => '2430',
                'in_stock' => 1,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:12:05',
                'updated_at' => '2022-09-15 08:53:04',
            ),
        ));
        
        
    }
}