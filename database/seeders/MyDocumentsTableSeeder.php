<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MyDocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MyDocuments::factory()->count(30)->create();
    }
}
