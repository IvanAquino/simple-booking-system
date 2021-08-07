<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = now();

        return [
            'employee_id' => 1,
            'date' => $now->format('Y-m-d'),
            'start_time' => '09:00',
            'end_time' => '17:00',
        ];
    }
}
