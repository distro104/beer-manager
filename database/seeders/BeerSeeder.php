<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Beer;
use GuzzleHttp\Promise\Create;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beer::Create([
            'name' => 'Heineken',
            'slug' => 'Heineken',
            'type' => 'Lagger',
            'description' => 'The same great taste in 192 countries. That is what we call the perfect Heineken® draught beer.',
            'tecnical_description' => '',
            'image' => 'asdfasdfasdfasdf.jpg',
        ]);
    }
}
