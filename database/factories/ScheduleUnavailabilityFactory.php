<?php

namespace Database\Factories;

use App\Models\ScheduleUnavailability;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleUnavailabilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScheduleUnavailability::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schedule_id' => 1,
            'start_time' => '09:00',
            'end_time' => '10:00',
        ];
    }
}
