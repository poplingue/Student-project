<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class UserTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('users')->delete();
        
        DB::table('users')->insert(
            [
                [
                    'name'     => 'laravel',
                    'email'    => 'laravel@email.com',
                    'password' => Hash::make('password'),
                ],
                [
                    'name'     => 'php',
                    'email'    => 'php@email.com',
                    'password' => Hash::make('password'),
                ],
            ]
        );
    }
}