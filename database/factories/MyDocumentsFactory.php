<?php

namespace Database\Factories;

use \App\Models\MyDocuments;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyDocumentsactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyDocuments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'number_documents' => $this->faker->sentence,
            'perfil_id' => $this->faker->sentence,
        ];
    }
}
