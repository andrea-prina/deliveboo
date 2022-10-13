<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types =[
            'Pizzeria',
            'American',
            'Chinese',
            'Italian',
            'Mexican',
            'Japanese',
            'Poke',
            'Healthy',
            'Vegan',
            'Kebab',
            'Greek',
            'Grill',
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->type_name = $type;
            $newType->save();
        }
    }
}
