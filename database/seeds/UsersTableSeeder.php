<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //create test user
        $testUser = new User();
        $testUser->name = "Riccardo";
        $testUser->surname = "Petricca";
        $testUser->email = "rp@email.com";
        $testUser->address = $faker->address();
        $testUser->password = "password";
        $testUser->restaurant_name = "Petricca's restaurant ";
        $testUser->delivery_fee = $faker->randomFloat(2, 0, 10);
        $testUser->vat_number = "12345678910";
        $testUser->image_path = $faker->imageUrl(640, 480, 'food', true);

        $testUser->save();



        for ($i=0; $i < 10; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->surname = $faker->lastName();
            $newUser->restaurant_name = $newUser->surname . "'s restaurant ";
            $newUser->address = $faker->address();
            $newUser->delivery_fee = $faker->randomFloat(2, 0, 10);
            $newUser->email = $faker->email();
            $newUser->vat_number ="12345678910";
            $newUser->password = $faker->password();
            $newUser->image_path = $faker->imageUrl(640, 480, 'food', true);

            $newUser->save();
        }
    }
        
    }

