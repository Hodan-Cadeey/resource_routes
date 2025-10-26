<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $json = file_get_contents(database_path('seeders/employees.json'));
        $employees = json_decode($json, true);

        DB::table('employees')->insert($employees);
         foreach ($employees as $employee) {
            DB::table('employees')->insert([
                'first_name' => $employee['first_name'],
                'last_name'     => $employee['last_name'],
                'email'           => $employee['email'],
                'phone'         => $employee['phone'],
                'position'      =>$employee['position'],
                'salary'        =>$employee['salary'],
                'hire_date'     =>$employee['hire_date'],
                'active'        =>$employee['active'],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}
