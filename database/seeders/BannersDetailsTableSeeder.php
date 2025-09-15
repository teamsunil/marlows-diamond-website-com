<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners_details')->delete();
        
        \DB::table('banners_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banner_id' => 1,
                'description' => NULL,
                'image' => 'banner_133667459_29_04_2022_05_24_19.jpeg',
                'created_at' => '2022-04-29 10:53:17',
                'updated_at' => '2022-04-29 10:54:19',
            ),
            1 => 
            array (
                'id' => 2,
                'banner_id' => 2,
                'description' => 'This banner is used for Testing Purpose ',
                'image' => 'banner_214408910_07_05_2022_05_25_20.jpg',
                'created_at' => '2022-05-07 10:55:20',
                'updated_at' => '2022-05-07 10:58:55',
            ),
            2 => 
            array (
                'id' => 4,
                'banner_id' => 3,
                'description' => '<p>Test</p>',
                'image' => 'banner_99327600_12_05_2022_09_50_47.jpg',
                'created_at' => '2022-05-11 19:13:13',
                'updated_at' => '2022-05-12 15:20:47',
            ),
            3 => 
            array (
                'id' => 5,
                'banner_id' => 3,
                'description' => NULL,
                'image' => NULL,
                'created_at' => '2022-05-12 15:20:47',
                'updated_at' => '2022-05-12 15:20:47',
            ),
            4 => 
            array (
                'id' => 6,
                'banner_id' => 4,
                'description' => '<p>Test QA<br></p>',
                'image' => 'banner_203917449_12_05_2022_10_00_52.jpg',
                'created_at' => '2022-05-12 15:24:23',
                'updated_at' => '2022-05-12 15:30:52',
            ),
            5 => 
            array (
                'id' => 7,
                'banner_id' => 4,
                'description' => NULL,
                'image' => NULL,
                'created_at' => '2022-05-12 15:30:52',
                'updated_at' => '2022-05-12 15:30:52',
            ),
            6 => 
            array (
                'id' => 8,
                'banner_id' => 5,
                'description' => '<p>adsd</p>',
                'image' => 'banner_943968839_12_05_2022_10_04_58.jpg',
                'created_at' => '2022-05-12 15:34:58',
                'updated_at' => '2022-05-12 15:34:58',
            ),
            7 => 
            array (
                'id' => 9,
                'banner_id' => 6,
                'description' => '<p>raubi testing d<span style="font-size: 1rem;">escription</span><br></p>',
                'image' => 'banner_2391956_19_04_2023_05_58_40.png',
                'created_at' => '2023-04-19 05:58:40',
                'updated_at' => '2023-04-19 05:58:40',
            ),
            8 => 
            array (
                'id' => 10,
                'banner_id' => 7,
                'description' => '<p>rtrt</p>',
                'image' => '',
                'created_at' => '2023-04-19 07:25:54',
                'updated_at' => '2023-04-19 07:25:54',
            ),
            9 => 
            array (
                'id' => 11,
                'banner_id' => 9,
                'description' => '<p>dfdfdf</p>',
                'image' => '',
                'created_at' => '2023-04-19 08:40:34',
                'updated_at' => '2023-04-19 08:40:34',
            ),
            10 => 
            array (
                'id' => 12,
                'banner_id' => 10,
                'description' => '<p>ttt</p>',
                'image' => '',
                'created_at' => '2023-04-19 08:49:15',
                'updated_at' => '2023-04-19 08:49:15',
            ),
            11 => 
            array (
                'id' => 13,
                'banner_id' => 12,
                'description' => '<p>23</p>',
                'image' => '',
                'created_at' => '2023-04-19 09:30:58',
                'updated_at' => '2023-04-19 09:30:58',
            ),
            12 => 
            array (
                'id' => 14,
                'banner_id' => 13,
                'description' => '<p>ll</p>',
                'image' => '',
                'created_at' => '2023-04-19 10:12:14',
                'updated_at' => '2023-04-19 10:12:14',
            ),
        ));
        
        
    }
}