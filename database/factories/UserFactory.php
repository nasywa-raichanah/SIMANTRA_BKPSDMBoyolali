<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'nip' => $this->faker->unique()->numerify('###############'), // Tambahkan ini
            'password' => Hash::make('password'), // Jangan lupa di-hash
            'remember_token' => Str::random(10),
        ];
    }
}
