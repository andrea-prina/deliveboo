<?php

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

            $user->types()->attach(rand(1, 12));
        }
    }
}
