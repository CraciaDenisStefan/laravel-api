<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<5; $i++){
            
            $project = new Project();

            $project -> title = $faker->word();
            $project -> date = $faker->date();
            $project -> description = $faker->text();
            $project -> cover_image = $faker->imageUrl(640,480,'animals',true);

            $project->save();
        }
    }

}