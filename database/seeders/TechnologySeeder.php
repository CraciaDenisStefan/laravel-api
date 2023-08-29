<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML','CSS','JavaScript','VueJs','php','Laravel'];

        foreach($technologies as $tech){
            $technology = new Technology();

            $technology->name = $tech;

            $technology->save();
        }
    }
}
