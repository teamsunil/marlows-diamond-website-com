<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppProductAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_product_attributes')->delete();
        
        \DB::table('app_product_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => '1',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-13 06:26:50',
                'updated_at' => '2022-09-13 09:05:40',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => '1',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-13 06:26:50',
                'updated_at' => '2022-09-13 09:05:40',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => '1',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-13 09:05:40',
                'updated_at' => '2022-09-13 09:05:40',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => '1',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-13 09:05:40',
                'updated_at' => '2022-09-13 09:05:40',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 09:42:09',
                'updated_at' => '2022-09-14 13:13:00',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 09:42:09',
                'updated_at' => '2022-09-14 13:13:00',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 13:13:00',
                'updated_at' => '2022-09-14 13:16:18',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 13:13:00',
                'updated_at' => '2022-09-14 13:16:18',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 13:16:18',
                'updated_at' => '2022-09-15 05:41:33',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-14 13:16:18',
                'updated_at' => '2022-09-15 05:41:33',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 05:41:33',
                'updated_at' => '2022-09-15 06:50:34',
                'information' => '"{\\"id\\":12,\\"parent_id\\":null,\\"slug\\":\\"carat\\",\\"type\\":\\"product_attributes\\",\\"name\\":\\"Carat\\",\\"value\\":\\"Carat\\",\\"is_active\\":1,\\"is_deleted\\":0,\\"created_at\\":\\"2022-09-09T06:25:56.000000Z\\",\\"updated_at\\":\\"2022-09-09T06:25:56.000000Z\\"}"',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 05:41:34',
                'updated_at' => '2022-09-15 06:50:34',
                'information' => '"{\\"id\\":1,\\"parent_id\\":null,\\"slug\\":\\"mined-diamond\\",\\"type\\":\\"product_type\\",\\"name\\":\\"Mined Diamond\\",\\"value\\":\\"mined-diamond\\",\\"is_active\\":1,\\"is_deleted\\":0,\\"created_at\\":\\"2022-09-02T10:41:07.000000Z\\",\\"updated_at\\":\\"2022-09-02T10:41:07.000000Z\\"}"',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 06:50:34',
                'updated_at' => '2022-09-15 07:04:32',
                'information' => '"{\\"id\\":12,\\"parent_id\\":null,\\"slug\\":\\"carat\\",\\"type\\":\\"product_attributes\\",\\"name\\":\\"Carat\\",\\"value\\":\\"Carat\\",\\"is_active\\":1,\\"is_deleted\\":0,\\"created_at\\":\\"2022-09-09T06:25:56.000000Z\\",\\"updated_at\\":\\"2022-09-09T06:25:56.000000Z\\"}"',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 06:50:34',
                'updated_at' => '2022-09-15 07:04:32',
                'information' => '"{\\"id\\":1,\\"parent_id\\":null,\\"slug\\":\\"mined-diamond\\",\\"type\\":\\"product_type\\",\\"name\\":\\"Mined Diamond\\",\\"value\\":\\"mined-diamond\\",\\"is_active\\":1,\\"is_deleted\\":0,\\"created_at\\":\\"2022-09-02T10:41:07.000000Z\\",\\"updated_at\\":\\"2022-09-02T10:41:07.000000Z\\"}"',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:04:32',
                'updated_at' => '2022-09-15 07:06:23',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:04:32',
                'updated_at' => '2022-09-15 07:06:23',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:06:23',
                'updated_at' => '2022-09-15 07:07:43',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:06:23',
                'updated_at' => '2022-09-15 07:07:43',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:07:43',
                'updated_at' => '2022-09-15 07:11:33',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:07:43',
                'updated_at' => '2022-09-15 07:11:33',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => '2',
                'attribute_id' => '13',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:11:33',
                'updated_at' => '2022-09-15 07:13:18',
                'information' => '{"id":13,"parent_id":null,"slug":"finger-size","type":"product_attributes","name":"Finger Size","value":"Finger Size","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:26:04.000000Z","updated_at":"2022-09-09T06:26:04.000000Z"}',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:11:33',
                'updated_at' => '2022-09-15 07:13:18',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:11:33',
                'updated_at' => '2022-09-15 07:13:18',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => '2',
                'attribute_id' => '13',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:13:18',
                'updated_at' => '2022-09-15 08:35:31',
                'information' => '{"id":13,"parent_id":null,"slug":"finger-size","type":"product_attributes","name":"Finger Size","value":"Finger Size","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:26:04.000000Z","updated_at":"2022-09-09T06:26:04.000000Z"}',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:13:18',
                'updated_at' => '2022-09-15 08:35:31',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 07:13:18',
                'updated_at' => '2022-09-15 08:35:31',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => '2',
                'attribute_id' => '13',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 08:35:31',
                'updated_at' => '2022-09-15 08:52:57',
                'information' => '{"id":13,"parent_id":null,"slug":"finger-size","type":"product_attributes","name":"Finger Size","value":"Finger Size","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:26:04.000000Z","updated_at":"2022-09-09T06:26:04.000000Z"}',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 08:35:31',
                'updated_at' => '2022-09-15 08:52:57',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 1,
                'created_at' => '2022-09-15 08:35:31',
                'updated_at' => '2022-09-15 08:52:57',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => '2',
                'attribute_id' => '12',
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-15 08:52:57',
                'updated_at' => '2022-09-15 08:52:57',
                'information' => '{"id":12,"parent_id":null,"slug":"carat","type":"product_attributes","name":"Carat","value":"Carat","is_active":1,"is_deleted":0,"created_at":"2022-09-09T06:25:56.000000Z","updated_at":"2022-09-09T06:25:56.000000Z"}',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => '2',
                'attribute_id' => NULL,
                'display_order' => NULL,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => '2022-09-15 08:52:57',
                'updated_at' => '2022-09-15 08:52:57',
                'information' => '{"id":1,"parent_id":null,"slug":"mined-diamond","type":"product_type","name":"Mined Diamond","value":"mined-diamond","is_active":1,"is_deleted":0,"created_at":"2022-09-02T10:41:07.000000Z","updated_at":"2022-09-02T10:41:07.000000Z"}',
            ),
        ));
        
        
    }
}