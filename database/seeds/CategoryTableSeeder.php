<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class CategoryTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('categories')->delete();
        
        DB::table('categories')->insert(
            [
                [
                    'title'  => 'categorie1',
                ],
                [
                    'title'  => 'categorie2',
                ],
            ]
        );
    }
}