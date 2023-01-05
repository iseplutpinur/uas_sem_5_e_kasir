<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Makanan',
                'created_at' => '2023-01-05 22:17:02',
                'updated_at' => '2023-01-05 22:17:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Minuman',
                'created_at' => '2023-01-05 22:17:10',
                'updated_at' => '2023-01-05 22:17:10',
            ),
        ));
        
        
    }
}