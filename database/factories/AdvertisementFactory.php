<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph(2),
            'date' => $this->faker->date,
            'published' => $this->faker->boolean,
            'company_id' => $this->faker->numberBetween(1, 10),
            'contract_type' => "CDI",
            'wage' => $this->faker->numberBetween(1000, 4000),
            'city' => $this->faker->city,
            'working_time' => $this->faker->numberBetween(10, 50),
        ];
    }
}
