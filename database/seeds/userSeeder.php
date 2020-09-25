<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'first_name' => 'Beverly',
         'last_name' => 'Moraa',
         'email' => 'bmoraa@gmail.com',
         'password' => Hash::make('12345678'),
         'created_at' => now(),
         'updated_at' => now()
     ]);
 }
    }
