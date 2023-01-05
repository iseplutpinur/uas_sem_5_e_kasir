<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Miss Heloise Blick',
                'username' => 'raina73',
                'email' => 'xupton@example.net',
                'email_verified_at' => '2023-01-05 22:01:47',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 's6JmLWfKRP',
                'created_at' => '2023-01-05 22:01:47',
                'updated_at' => '2023-01-05 22:01:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dr. Marlene Koepp MD',
                'username' => 'shields.tressie',
                'email' => 'rahsaan11@example.net',
                'email_verified_at' => '2023-01-05 22:01:47',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'mNbFOOVaRo',
                'created_at' => '2023-01-05 22:01:47',
                'updated_at' => '2023-01-05 22:01:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carley Price',
                'username' => 'devonte.gusikowski',
                'email' => 'sheldon19@example.org',
                'email_verified_at' => '2023-01-05 22:01:47',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'JvjU3Ap9Jt',
                'created_at' => '2023-01-05 22:01:47',
                'updated_at' => '2023-01-05 22:01:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d0R9XBKjta33WgKTu8mZOeknTqkFojy71V52ahBWWl8Gny7Y2BYTK',
                'remember_token' => NULL,
                'created_at' => '2023-01-05 22:01:47',
                'updated_at' => '2023-01-05 22:01:47',
            ),
        ));
        
        
    }
}