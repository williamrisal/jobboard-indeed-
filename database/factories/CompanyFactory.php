<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            "name" => $this->faker->company,
            "first_name" => $this->faker->name,
            "last_name" => $this->faker->name,
            "email" => $this->faker->email,
            "activities" => "IT",
            "postal_code" => $this->faker->numberBetween(13001, 13015),
            "city" => $this->faker->city,
            "siret" => $this->faker->randomDigit(),
            "password" => $this->faker->password,
            "number_employees" => $this->faker->numberBetween(1, 200),
            "website" => "discord-france.fr",
            "phone" => "0491728333",
            "email" => $this->faker->email,
            "contact_name" => $this->faker->name,
        ];
    }
}
