<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currency')->delete();
        
        \DB::table('currency')->insert(array (
            0 => 
            array (
                'id' => 142,
                'currency_name' => 'INR',
                'currency_title' => 'Indian rupee',
                'currency_sign' => '₹',
                'base_price' => '6',
                'status' => 1,
                'created_at' => '2023-04-11 10:23:25',
                'updated_at' => '2023-04-21 09:12:28',
            ),
            1 => 
            array (
                'id' => 145,
                'currency_name' => 'USD',
                'currency_title' => 'United States',
                'currency_sign' => '$',
                'base_price' => '1',
                'status' => 1,
                'created_at' => '2023-04-15 05:45:29',
                'updated_at' => '2023-04-21 09:11:14',
            ),
            2 => 
            array (
                'id' => 172,
                'currency_name' => 'EUR',
                'currency_title' => 'Euro',
                'currency_sign' => '€',
                'base_price' => '3',
                'status' => 1,
                'created_at' => '2023-04-17 08:34:31',
                'updated_at' => '2023-05-26 07:15:39',
            ),
            3 => 
            array (
                'id' => 173,
                'currency_name' => 'AUD',
                'currency_title' => 'Australian dollar',
                'currency_sign' => '$',
                'base_price' => '3',
                'status' => 1,
                'created_at' => '2023-04-21 09:16:00',
                'updated_at' => '2023-05-26 07:14:12',
            ),
            4 => 
            array (
                'id' => 175,
                'currency_name' => 'GBP',
                'currency_title' => 'Pound sterling',
                'currency_sign' => '£',
                'base_price' => '1',
                'status' => 1,
                'created_at' => '2023-04-25 12:11:13',
                'updated_at' => '2023-05-26 07:13:52',
            ),
        ));
        
        
    }
}