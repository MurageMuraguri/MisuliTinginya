<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employee')->insert([
          'Emp_name' => 'Amos',
          'Emp_role' => 'Farmer',
          'Emp_contact' => '+25472893728',
          'Date_of_hiring' => '2020/09/10',
          'id_number' => '3616526723',
          'Passport_photo' => 'uploads/a.png',
          'salary' => '20,000',
          'User_id' => '1',
          'created_at' => now(),
          'updated_at' => now()

      ]);
  }
    }
