<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class expensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('expenses')->insert([
         'expenses_name' => 'Fooder',
         'expenses_description' => 'Premium grade',
         'expenses_description' => 'Premium grade',
         'expenses_date' => '2020/09/10',
         'expenses_quantity' => '20',
         'expenses_cost_per_unit' => '20',
         'expenses_ttl_cost' => '40',
// Here is where i need some php majic
        'id' => '1',
         'created_at' => now(),
         'updated_at' => now()

     ]);
 }
    }
