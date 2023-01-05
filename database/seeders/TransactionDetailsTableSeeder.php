<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_details')->delete();
        
        \DB::table('transaction_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'transaction_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'created_at' => '2023-01-05 22:17:56',
                'updated_at' => '2023-01-05 22:17:56',
            ),
            1 => 
            array (
                'id' => 2,
                'transaction_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'created_at' => '2023-01-05 22:17:56',
                'updated_at' => '2023-01-05 22:17:56',
            ),
        ));
        
        
    }
}