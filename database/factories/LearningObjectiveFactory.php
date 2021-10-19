<?php

namespace Database\Factories;

use App\Models\LearningObjective;
use Illuminate\Database\Eloquent\Factories\Factory;

class LearningObjectiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LearningObjective::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
        ];
    }
}
