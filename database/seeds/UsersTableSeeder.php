<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new User();
        $user->name ="louis";
        $user->email = "louis@gmail.com";
        $user-> password = Hash::make('AZERTYUIOP');
        $user->save();

    }
}
