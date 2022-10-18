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

        $types =[
            [
                'name' => 'Vegan',
                'icon' => 'https://i.ibb.co/r2Tq7Sv/vegan-col.png',
            ],
            [
                'name' => 'Grill',
                'icon' => 'https://i.ibb.co/F4QBqf8/grill-col.png',
            ],
            [
                'name' => 'Pizzeria',
                'icon' => 'https://i.ibb.co/xJ2mg2f/pizza-col.png',
            ],
            [
                'name' => 'Chinese',
                'icon' => 'https://i.ibb.co/Lnct86h/dimsum.png',
            ],
            [
                'name' => 'American',
                'icon' => 'https://i.ibb.co/9NS57pf/hamburgher-col.png',
            ],
            [
                'name' => 'Poke',
                'icon' => 'https://i.ibb.co/zNPzNcH/poke-col.png',
            ],
            [
                'name' => 'Healthy',
                'icon' => 'https://i.ibb.co/9VRbkZP/healthy-col.png',
            ],
            [
                'name' => 'Italian',
                'icon' => 'https://i.ibb.co/4RxgTrj/spaghetti-color.png',
            ],
            [
                'name' => 'Mexican',
                'icon' => 'https://i.ibb.co/kxxhP5S/mexican-col.png',
            ],
            [
                'name' => 'Kebab',
                'icon' => 'https://i.ibb.co/sPPzK8g/kebab-col.png',
            ],
            [
                'name' => 'Japanese',
                'icon' => 'https://i.ibb.co/sqvV1BZ/sushi-col.png',
            ],
            [
                'name' => 'Greek',
                'icon' => 'https://i.ibb.co/Rypr42Y/tzatziki.png',
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->type_name = $type['name'];
            $newType->icon_path = $type['icon'];
            $newType->save();
        }
    }
}
