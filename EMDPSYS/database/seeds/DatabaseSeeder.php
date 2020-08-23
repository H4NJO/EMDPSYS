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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name'=> Str::random(10),
            'email'=> 'admin@admin.com',
            'password'=>Hash::make('123456'),
        ]);
    }
}
