<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'name' => 'Roti Bakar',
                'price' => 20000,
                'image' => 'e-kasir-1672957059.jpg',
                'created_at' => '2023-01-05 22:17:39',
                'updated_at' => '2023-01-05 22:17:39',
            ),
        ));
        
        
    }
}