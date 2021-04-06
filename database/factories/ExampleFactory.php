<?php

namespace Database\Factories;

use App\Models\Example;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExampleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Example::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=> $this->faker->firstName,
            'email'=> $this->faker->email,
            'phone'=> $this->faker->phoneNumber,
            'photo'=> $this->faker->lastName
        ];
    }
}
