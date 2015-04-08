<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
        
class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('UserTableSeeder');
        $this->call('StudentTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('TagPostTableSeeder');

        $this->command->info('Student table seeded!');
    }
}

