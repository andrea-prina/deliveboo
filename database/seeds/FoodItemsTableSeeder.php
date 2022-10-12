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

        $users = User::all();

        foreach ($users as $user) {

            for ($i=1; $i < rand(5,20); $i++) { 
                
                $newFood = new FoodItem();
                
                $newFood->user_id = $user->id;
                $newFood->name = "Dish n." . $i;
                $newFood->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
                $newFood->price = $faker->randomFloat(2,1,40);

                $newFood->save();
            }
        
        }

    }
}
