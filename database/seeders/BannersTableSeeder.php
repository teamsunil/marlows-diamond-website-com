<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 4,
                'page_id' => 1,
                'title' => 'Test QA',
                'description' => NULL,
                'status' => 1,
                'image' => NULL,
                'is_deleted' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-12 15:24:22',
                'updated_at' => '2022-05-12 15:24:22',
            ),
            1 => 
            array (
                'id' => 9,
                'page_id' => 0,
                'title' => 'sdfdf',
                'description' => NULL,
                'status' => 1,
                'image' => NULL,
                'is_deleted' => 0,
                'deleted_at' => NULL,
                'created_at' => '2023-04-19 08:40:34',
                'updated_at' => '2023-04-19 08:40:34',
            ),
        ));
        
        
    }
}