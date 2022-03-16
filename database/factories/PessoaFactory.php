<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'data_nasc' => $this->faker->dateTime(),
            'nacionalidade' => Str::random(10),
        ];
    }
}
