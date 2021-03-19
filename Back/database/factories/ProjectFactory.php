<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Project ' . Str::random(10),
            'is_default' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(1, 1000),
            'created_at' => now(),
        ];
    }
}
