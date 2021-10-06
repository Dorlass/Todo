<?php

namespace Database\Factories;

use App\Models\skills;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = skills::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'level' => $this->faker->randomDigitNotNull()
        ];
    }
}
