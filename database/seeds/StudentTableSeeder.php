<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
   
class StudentTableSeeder extends Seeder {
    
    public function run() {
        
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        
        DB::table('students')->delete();
        
        DB::table('students')->insert(
            [
                [
                    'firstname'  => 'Pop',
                    'name'       => 'Lingue',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Quel',
                    'name'       => 'Camille',
                    'bio'        => 'T\'as pas un gimmick, mec ?',
                    'type'       => 'dev',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'firstname'  => 'Tony',
                    'name'       => 'Soprano',
                    'bio'        => 'blablablabla',
                    'type'       => 'dev',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
            ]
        );
    }
}