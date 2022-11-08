<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class employeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => Str::random(15),
            'second_name' => Str::random(15),
            'middle_name' => Str::random(15),
            'birthdate' => DATE::random(6),
            'salary' => Double::random(5),
            'phone' => Bigint::random(11),
            'email' => Str::random(6).'@mail.ru',
            'adress' => Str::random(15),
            'updated_at' => DATE::random(3),
            'created_at'=> DATE::random(3),


        ];
    }
}
