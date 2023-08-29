<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Frontend','Backend', 'FullStack'];

        foreach($types as $tipo){
            $type = new Type();

            $type->name = $tipo;

            $type->save();

        }
    }
}
