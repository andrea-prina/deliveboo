<?php

use App\Models\Type;
use App\User;
use Illuminate\Database\Seeder;

class TypeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = User::all();

        foreach ($users as $user) {

            $randomTypes = Type::inRandomOrder()->take(rand(1,3))->get();
            $user->types()->attach($randomTypes);

        }
    }
}
