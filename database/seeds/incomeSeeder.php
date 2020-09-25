<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class incomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('income')->insert([
         'income_name' => 'Cheese',
         'quantity' => '20',
         'price_per_unit' => '28',
         'ttl_price' => '560',
         //some php magic
          'buyer_contact' => '+2546782760',
          'Date_of_production' => '2020/09/10',
          'Date_of_sale' => '2020/11/10',
          'id' => '1',
          'created_at' => now(),
          'updated_at' => now()
     ]);
 }
    }
