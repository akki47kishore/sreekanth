<?php

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
         DB::table('emp')->insert([
            'name' => 'sreekanth',
        ]);
	DB::table('emp')->insert([
            'name' => 'raju',
        ]);
    }
}
