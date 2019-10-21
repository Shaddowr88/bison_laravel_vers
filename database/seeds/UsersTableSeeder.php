<?php

use App\User;
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


        $user = new User();
        $user->name ="usher";
        $user->email = "usher@gmail.com";
        $user-> password = Hash::make('AZERTYUIOP');
        $user->save();

        $user = new User();
        $user->name ="piere";
        $user->email = "pierre@gmail.com";
        $user-> password = Hash::make('AZERTYUIOP');
        $user->save();

    }
}


