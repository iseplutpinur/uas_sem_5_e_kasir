<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'number' => 'INV-1672957076',
                'time' => '2023-01-05 22:17:56',
                'total' => 40000,
                'pay' => 50000,
                'created_at' => '2023-01-05 22:17:56',
                'updated_at' => '2023-01-05 22:18:02',
            ),
        ));
        
        
    }
}