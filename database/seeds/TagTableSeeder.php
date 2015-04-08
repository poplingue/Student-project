<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class TagTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('tags')->delete();
        
        DB::table('tags')->insert(
            [
                [
                    'name'  => 'voyage',
                ],
                [
                    'name'  => 'animaux',
                ],
                [
                    'name'  => 'politique',
                ],
                [
                    'name'  => 'sciences',
                ],
            ]
        );
    }
}