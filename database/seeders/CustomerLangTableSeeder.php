<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerLangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_lang')->delete();
        
        \DB::table('customer_lang')->insert(array (
            0 => 
            array (
                'id' => 8,
                'user_id' => 520,
                'lang' => 'FR',
                'name' => 'Adonia spansih',
                'nicename' => 'Ronan koulouri spansih',
            ),
            1 => 
            array (
                'id' => 9,
                'user_id' => 577,
                'lang' => 'FR',
                'name' => 'Prachi',
                'nicename' => 'DS',
            ),
            2 => 
            array (
                'id' => 10,
                'user_id' => 577,
                'lang' => 'DE',
                'name' => 'Prachi',
                'nicename' => 'DS',
            ),
            3 => 
            array (
                'id' => 11,
                'user_id' => 577,
                'lang' => 'DE',
                'name' => 'Prachi',
                'nicename' => 'DS',
            ),
            4 => 
            array (
                'id' => 12,
                'user_id' => 577,
                'lang' => 'DE',
                'name' => 'Prachi',
                'nicename' => 'DS',
            ),
            5 => 
            array (
                'id' => 13,
                'user_id' => 577,
                'lang' => 'DE',
                'name' => 'Prachi -german1',
                'nicename' => 'DS',
            ),
        ));
        
        
    }
}