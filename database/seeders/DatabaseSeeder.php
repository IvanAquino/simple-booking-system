<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Schedule;
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
        // Create employees
        $employee_1 = Employee::create([
            'name' => 'Employee 1',
        ]);
        $employee_2 = Employee::create([
            'name' => 'Employee 2',
        ]);

        // Create services
        $service_1 = Service::create([
            'name' => 'Coding session',
            'duration' => 60,
        ]);
        $service_2 = Service::create([
            'name' => 'Code review',
            'duration' => 120,
        ]);

        // Attach services to employees
        $employee_1->services()->attach([
            $service_1->id,
            $service_2->id,
        ]);
        $employee_2->services()->attach([
            $service_1->id,
            $service_2->id,
        ]);

        // Create schedules
        $now = now();
        Schedule::create([
            'employee_id' => $employee_1->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
        Schedule::create([
            'employee_id' => $employee_2->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
        $now->addDay();
        Schedule::create([
            'employee_id' => $employee_1->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
        Schedule::create([
            'employee_id' => $employee_2->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
        $now->addDay();
        Schedule::create([
            'employee_id' => $employee_1->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
        Schedule::create([
            'employee_id' => $employee_2->id,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ]);
    }
}
