<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Service;
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
        $employee_1 = Employee::create([
            'name' => 'Employee 1',
        ]);
        $employee_2 = Employee::create([
            'name' => 'Employee 2',
        ]);

        $service_1 = Service::create([
            'name' => 'Coding session',
            'duration' => 60,
        ]);
        $service_2 = Service::create([
            'name' => 'Code review',
            'duration' => 120,
        ]);

        $employee_1->services()->attach([
            $service_1->id,
            $service_2->id,
        ]);
        $employee_2->services()->attach([
            $service_1->id,
            $service_2->id,
        ]);
    }
}
