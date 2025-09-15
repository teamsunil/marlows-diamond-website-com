<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Metal Type',
                'slug' => 'metal-type',
                'values' => 'Platinum | 9ct White Gold | 9ct Yellow Gold | 9ct Rose Gold | 18ct White Gold | 18ct Yellow Gold | 18ct Rose Gold',
                'status' => 0,
                'created_at' => '2022-04-19 09:57:03',
                'updated_at' => '2022-04-21 07:12:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Finger Size',
                'slug' => 'finger-size',
                'values' => 'G | G-1/2 | H | H-1/2 | I | I-1/2 | J | J-1/2 | K | K-1/2 | L | L-1/2 | M | M-1/2 | N | N-1/2 | O | O-1/2 | P | P-1/2 | Q | Q-1/2 | R | R-1/2 | S | S-1/2 | T | T-1/2 | U | U-1/2 | V | V-1/2 | W | W-1/2 | X | X-1/2 | Y | Y-1/2 | Z | Z-1/2',
                'status' => 0,
                'created_at' => '2022-04-19 09:57:21',
                'updated_at' => '2022-04-19 09:57:21',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Carat',
                'slug' => 'carat',
                'values' => '0.07 | 0.08 | 0.10 | 0.12 | 0.13 | 0.14 | 0.15 | 0.17 | 0.18 | 0.2 | 0.21 | 0.25 | 0.30 | 0.33 | 0.34 | 0.38 | 0.5 | 0.52 | 0.58 | 0.66 | 0.67 | 0.7 | 0.75 | 0.85 | 0.95 | 1 | 1.01 | 1.05 | 1.2 | 1.25 | 1.33 | 1.40 | 1.5 | 1.7 | 1.8 | 1.85 | 1.9 | 2 | 2.5 | 2.51 | 2.7 | 3 | 3.14 | 3.25 | 3.5 | 3.75 | 3.81 | 4 | 5 | 5.26 | 6 | 7 | 7.02 | 8 | 8.37 | 10 | 10.03 | 12 | 15 | 18 | 20 | 27',
                'status' => 0,
                'created_at' => '2022-04-21 07:04:12',
                'updated_at' => '2022-04-21 07:04:12',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Width MM',
                'slug' => 'width-mm',
                'values' => '0.38 | 1 | 2 | 2.5 | 3 | 4 | 5 | 6 | 7',
                'status' => 0,
                'created_at' => '2022-04-25 17:45:35',
                'updated_at' => '2022-04-25 17:45:35',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Total Diamond Weight',
                'slug' => 'total-diamond-weight',
                'values' => '0.85 | 1 | 1.25 | 1.5 | 2',
                'status' => 0,
                'created_at' => '2022-05-16 14:48:33',
                'updated_at' => '2022-05-16 14:48:33',
            ),
        ));
        
        
    }
}