<?php

namespace Database\Factories;

use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

class studentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'age'=>12,
        ];
    }
}
