<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Newsletter;
use Illuminate\Support\Str;

class NewsletterFactory extends Factory
{
    protected $model = Newsletter::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}