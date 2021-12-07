<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'postal_code' => $this->faker->numberBetween(13000, 13015),
            'city' => $this->faker->city,
            'gender' => "Men",
            'birth_date' => "1967-05-12",
//            'phone' => $this->faker->numberBetween(1, 0491999999),
        ];
    }
}
