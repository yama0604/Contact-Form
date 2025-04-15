<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    // モデルの指定
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->safeEmail,
            'tel1' => $this->faker->numberBetween(100, 999),     // 3桁
            'tel2' => $this->faker->numberBetween(1000, 9999),   // 4桁
            'tel3' => $this->faker->numberBetween(1000, 9999),   // 4桁
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress,
            'inquiry_type' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'inquiry' => $this->faker->realText(100),
        ];
    }
}