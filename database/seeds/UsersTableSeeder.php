<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder


{
   

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $showCaseUser = [
            [
            'name' => 'Riccardo',
            'surname' => 'Petricca',
            'email' => 'rp@email.com',
            'password' => Hash::make('password'),
            'restaurant_name' => 'Da Petricca',
            'address' => 'Via Roma, 1',
            'delivery_fee' => 2.5,
            'image_path'=> 'https://i.ibb.co/HnPyzV2/risto-2.jpg',
            'vat_number' => '12345678911',
            ],
            [
            'name' => 'Simone',
            'surname' => 'Saffiotti',
            'email' => 'mario@rossi.com',
                'password' => Hash::make('password'),
                'restaurant_name' => 'Fu Abbracciami',
                'address' => 'Via Montegani, 31',
                'delivery_fee' => 5.5,
                'image_path'=> 'https://i.ibb.co/Rb3CTj3/il-nostro-dehor-estivo.jpg',
                'vat_number' => '12345678911',
             ],
                [
                'name' => 'Luca',
                'surname' => 'Bianchi',
                'email' => 'luca@bianchi.com',
                'password' => Hash::make('password'),   
                'restaurant_name' => 'Qui si mangia Mare',
                'address' => 'Via Roma, 3',
                'delivery_fee' => 1.7,
                'image_path'=> 'https://i.ibb.co/ySTxqRj/louis-burger-13.jpg',
                'vat_number' => '12345678911',
                ],
                [
                'name' => 'Giuseppe',
                'surname' => 'Verdi',
                'email' => 'giuseppe@verdi.com',
                'password' => Hash::make('password'),
                'restaurant_name' => 'La Cucina di Beppino',
                'address' => 'Via Roma, 4',
                'delivery_fee' => 3.5,
                'image_path'=> 'https://i.ibb.co/ZLrLzm3/risto-3-china.jpg',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Andrea',
                'surname' => 'Prina',
                'email' => 'andrea@prina.com',
                'password' => Hash::make('password'),
                'restaurant_name' => 'Da PriNa fai PriMa',
                'address' => 'Via Roma, 5',
                'delivery_fee' => 10,
                'image_path'=> 'https://i.ibb.co/rG24QNy/risto-4-sushi.jpg',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Simone',
                'surname' => 'Rizzo',
                'email' => 'giovanni@giovannini.com',
                'password' => Hash::make('password'),
                'restaurant_name' => 'Da RiZZardo',
                'address' => 'Via Roma, 6',
                'delivery_fee' => 2.5,
                'image_path'=> 'https://i.ibb.co/F47kjzq/risto-5-pizzoria.jpg',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Stefano',
                'surname' => 'Caratozzolo',
                'email' => 'giorgio@giorgini.it',
                'password' => Hash::make('password'),
                'restaurant_name' => 'Da Pep N° 8',
                'address' => 'Via Roma, 7',
                'delivery_fee' => 8,
                'image_path'=> 'https://i.ibb.co/Zf7B7Kh/risto-6-grill-spuntino-di-campagna.jpg',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Giovanni',
                'surname' => 'Giacomini',
                'email' => 'giacomo@x.com',
                'password' => Hash::make('password'),
                'restaurant_name' => 'La Cozza',
                'address' => 'Via Roma, 8',
                'delivery_fee' => 5,
                'image_path'=> 'https://i.ibb.co/CKY2NJQ/risto-7-la-cozza.webp',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Gianluca',
                'surname' => 'Gianlucini',
                'email' => 'gianluca@gianlu.me',
                'password' => Hash::make('password'),
                'restaurant_name' => 'Sherwood',
                'address' => 'Via Roma, 9',
                'delivery_fee' => 2.8,
                'image_path'=> 'https://i.ibb.co/3s61FM2/risto-8-sherwood.jpg',
                'vat_number' => '12345678911',
                ],
                [
                    'name' => 'Gianluigi',
                'surname' => 'Gianluigini',
                'email' => 'gian@gian.me',
                'password' => Hash::make('password'),
                'restaurant_name' => 'La Grotta',
                'address' => 'Via Roma, 10',
                'delivery_fee' => 6,
                'image_path'=> 'https://i.ibb.co/5rwML90/risto-9-la-grotta.jpg',
                'vat_number' => '12345678911',
                ],
            ];



        foreach ($showCaseUser as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->surname = $user['surname'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->restaurant_name = $user['restaurant_name'];
            $newUser->address = $user['address'];
            $newUser->delivery_fee = $user['delivery_fee'];
            $newUser->image_path = $user['image_path'];
            $newUser->vat_number = $user['vat_number'];
            $newUser->save();
        };
    }
}
        //create test user
    //     $testUser = new User();
    //     $testUser->name = "Riccardo";
    //     $testUser->surname = "Petricca";
    //     $testUser->email = "rp@email.com";
    //     $testUser->address = $faker->address();
    //     $testUser->password = Hash::make("password");
    //     $testUser->restaurant_name = "Petricca's restaurant ";
    //     $testUser->delivery_fee = $faker->randomFloat(2, 0, 10);
    //     $testUser->vat_number = "12345678910";
    //     $testUser->image_path = $faker->imageUrl(640, 480, 'food', true);

    //     $testUser->save();



    //     for ($i=0; $i < 100; $i++) {
    //         $newUser = new User();
    //         $newUser->name = $faker->name();
    //         $newUser->surname = $faker->lastName();
    //         $newUser->restaurant_name = $newUser->surname . "'s restaurant ";
    //         $newUser->address = $faker->address();
    //         $newUser->delivery_fee = $faker->randomFloat(2, 0, 10);
    //         $newUser->email = $faker->email();
    //         $newUser->vat_number ="12345678910";
    //         $newUser->password = Hash::make($faker->password());
    //         $newUser->image_path = $faker->imageUrl(640, 480, 'food', true);

    //         $newUser->save();
    //   
        
    


