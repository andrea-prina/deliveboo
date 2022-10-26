<?php

use App\Models\FoodItem;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FoodItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $petriccaMenu = [
            [
                'name' => 'Pizza Bufalona',
                'description' => 'Pizza con pomodoro, mozzarella di bufala e basilico',
                'price' => 5.5,
                'image_path' => 'https://i.ibb.co/yY3vbXG/Abbraccia-Mi-a-cucina-a-pizza-Milano-BUFALONA-01-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Pizza la Polpetta',
                'description' => 'Pizza con pomodoro, mozzarella, ricotta di bufala campana e polpette fatte in casa',
                'price' => 5.5,
                'image_path' => 'https://i.ibb.co/f2r1q26/Abbraccia-Mi-a-cucina-a-pizza-Milano-LA-POLPETTA-04-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Pizza la Vegggetale',
                'description' => 'Pizza con vellutata di zucca campana, caponatina di verdure al forno, mozzarella di bufala e basilico',
                'price' => 10.5,
                'image_path' => 'https://i.ibb.co/wdPfdGx/Abbraccia-Mi-a-cucina-a-pizza-Milano-LA-VEGGGETALE-05-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Pizza Margherita',
                'description' => 'Pizza con pomodoro, mozzarella e basilico',
                'price' => 6.5,
                'image_path' => 'https://i.ibb.co/mB18gvH/Abbraccia-Mi-a-cucina-a-pizza-Milano-MARGHERITA-06-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Pizza Parmigianella',
                'description' => 'Pizza con pomodoro, chips di melanzane, burratina pugliese e basilico',
                'price' => 7.5,
                'image_path' => 'https://i.ibb.co/dc9GgVd/Abbraccia-Mi-a-cucina-a-pizza-Milano-PARMIGIANELLA-09-native-copia.jpg',
                'user_id' => 1,
            ],
            
            [
                'name' => 'Montanarina',
                'description' => 'Pizzett fritt con pmmdr pammiggn e bslc',
                'price' => 7.5,
                'image_path' => 'https://i.ibb.co/fGNmWcT/Abbraccia-Mi-a-cucina-a-pizza-Milano-MONTANARINA-07-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Paccheri alla norma',
                'description' => 'Paccheri fatti in casa con salsa di pomodoro, melanzane a funghetto, ricotta di bufala e basilico',
                'price' => 12.5,
                'image_path' => 'https://i.ibb.co/y5KSxFN/Abbraccia-Mi-a-cucina-a-pizza-Milano-PACCHERI-NORMA-08-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Insalatona',
                'description' => 'Insalata con filetti di tonno di cetara, carotine, bocconcini di bufala campana, tocchettoni di patate e olive taggiasche',
                'price' => 9,
                'image_path' => 'https://i.ibb.co/Z1DFVdz/Abbraccia-Mi-a-cucina-a-pizza-Milano-INSALATONA-03-native-copia.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'Polpo Luciana',
                'description' => 'Polpo morbido con salsa di pomodoro, olive taggiasche, capperi di Pantelleria e basilico (Min. 2 persone)',
                'price' => 28,
                'image_path' => 'https://i.ibb.co/PGPkL27/Abbraccia-Mi-a-cucina-a-pizza-Milano-POLPO-LUCIANA-10-native-copia.jpg',
                'user_id' => 1,


            ],
            [
                'name' => 'Scialatielli alla Carbonara',
                'description' => 'Scialatielli fatti in casa con guanciale di maiale, uova, pecorino romano e pepe',
                'price' => 11,
                'image_path' => 'https://i.ibb.co/d7SCj37/Abbraccia-Mi-a-cucina-a-pizza-Milano-SCIALATIELLI-CARBONARA-11-native-copia.jpg',
                'user_id' => 1,
            ]


        ];

        $abbracciamiMenu = [
            [
                'name' => 'Brusca e Bufala',
                'description' => 'Mozzarella di bufala campana 250gr, pane della casa e datterini rossi',
                'price' => 5.5,
                'image_path' => 'https://i.ibb.co/zHRVbyk/NG-brusca-e-bufala-abbracciami-milano-26.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Insalatona Polletta',
                'description' => 'Insalata mista, pollo alla piastra, bacon croccante e dressing al formaggio',
                'price' => 5.5,
                'image_path' => 'https://i.ibb.co/xJHBmj5/NG-insalatona-e-polletta-abbracciami-milano-31.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Lasagnetta di Pollo',
                'description' => 'Petto di pollo, melanzane al forno, riduzione di vino e rosmarino',
                'price' => 8.5,
                'image_path' => 'https://i.ibb.co/w0SZL7C/NG-lasagnetta-di-pollo-abbracciami-milano-32.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Parmigiana Abbracciami',
                'description' => 'Parmigiana fatta al forno con melanzane viola, provola campana e datterini gialli',
                'price' => 11,
                'image_path' => 'https://i.ibb.co/2604sfM/NG-parmigiana-abbracciami-milano-33.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Scialatielli Fagioli e Cozze',
                'description' => 'Scialatielli fatti in casa con cozze, fagioli e basilico',
                'price' => 13.5,
                'image_path' => 'https://i.ibb.co/bKJ2cZk/NG-scialatielli-con-fagioli-e-cozze-abbracciami-milano-39.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Gnocchi al Ragù',
                'description' => 'Gnocchi di patate fatti in casa con ragù di carne e pecorino romano',
                'price' => 9.5,
                'image_path' => 'https://i.ibb.co/cYwGYTd/NG-tira-e-mangia-abbracciami-milano-40.jpg',
                'user_id' => 2,


            ],
            [
                'name' => 'Pizza La Bufalina',
                'description' => 'Pizza con salsa di pomodoro, mozzarella di bufala campana e basilico',
                'price' => 9.5,
                'image_path' => 'https://i.ibb.co/sKGNcKx/NG-bufalina-abbracciami-milano-27.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Pizza La Pestami',
                'description' => 'Pizza con provola campana, datterini gialli e pesto di basilico fatto in casa',
                'price' => 12.5,
                'image_path' => 'https://i.ibb.co/tsB7mw3/NG-pestami-abbracciami-milano-34.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Pizza Pistacchi Bologna',
                'description' => 'Pizza con mozzarella di bufala campana, mortadella tradizione Bologna e pesto di pistacchi di Bronte',
                'price' => 9,
                'image_path' => 'https://i.ibb.co/ZGx4sxR/NG-pizza-pistacchio-e-mortadella-abbracciami-milano-37.jpg',
                'user_id' => 2,
            ],
            [
                'name' => 'Pizza Abbracciami Forte',
                'description' => 'Pizza conmozzarella di bufala campana, ricotta campana, salame di suino nero e datterini gialli',
                'price' => 13,
                'image_path' => 'https://i.ibb.co/yh3GSVS/NG-pizza-abbracciami-abbracciami-milano-35.jpg',
                'user_id' => 2,


            ],
            [
                'name' => 'Pizza la Violetta',
                'description' => 'Pizza con provola campana, patate viola e pancetta tesa di suino nero',
                'price' => 11,
                'image_path' => 'https://i.ibb.co/PjvCpn7/NG-pizza-violetta-abbracciami-milano-38.jpg',
                'user_id' => 2,
            ]


        ];

        foreach ($petriccaMenu as $foodItem) {
            $newFoodItem = new FoodItem();
            $newFoodItem->name = $foodItem['name'];
            $newFoodItem->description = $foodItem['description'];
            $newFoodItem->price = $foodItem['price'];
            $newFoodItem->image_path = $foodItem['image_path'];
            $newFoodItem->user_id = $foodItem['user_id'];
            $newFoodItem->save();
        }

        foreach ($abbracciamiMenu as $foodItem) {
            $newFoodItem = new FoodItem();
            $newFoodItem->name = $foodItem['name'];
            $newFoodItem->description = $foodItem['description'];
            $newFoodItem->price = $foodItem['price'];
            $newFoodItem->image_path = $foodItem['image_path'];
            $newFoodItem->user_id = $foodItem['user_id'];
            $newFoodItem->save();
        }

        // $users = User::all();

        // foreach ($users as $user) {

        //     for ($i=1; $i < rand(5,20); $i++) { 
                
        //         $newFood = new FoodItem();
                
        //         $newFood->user_id = $user->id;
        //         $newFood->name = "Dish n." . $i;
        //         $newFood->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
        //         $newFood->price = $faker->randomFloat(2,1,40);
        //         $newFood->image_path = $faker->imageUrl(640, 480, 'food', true);

        //         $newFood->save();
        //     }
        
        // }

    }
}
