<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();
        // \App\Models\User::create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@mail.com',
        //     'password' => password_hash('admin', PASSWORD_DEFAULT)
        // ]);
        //
        // backup database
        // php artisan iseed users,password_resets,failed_jobs,personal_access_tokens,product_categories,products,transactions,transaction_details --force

        $this->call(UsersTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TransactionDetailsTableSeeder::class);
    }
}
