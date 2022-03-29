<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;
    private const BRANDS = [
        'mercedes',
        'tesla',
        'porsche',
        'yugo',
    ];

    private const ENGINES = [
        'diesel',
        'petrol',
        'electric',
        'hybrid',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement(self::BRANDS),
            'model' => Str::random(5),
            'year' => $this->faker->numberBetween(1990, 2022),
            'max_speed' => $this->faker->numberBetween(150, 200),
            'is_automatic' => $this->faker->boolean(30),
            'engine' => $this->faker->randomElement(Car::ENGINES),
            'number_of_door' => $this->faker->numberBetween(2, 5),
        ];
    }
}
