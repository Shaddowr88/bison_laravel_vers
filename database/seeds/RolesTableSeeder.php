<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role =new Role();
        $role->nom = "Administrateur";
        $role->description="Gestion du site e-copro";
        $role->save();

        $role =new Role();
        $role->nom = "Utilisateur";
        $role->description="utilisateur du site";
        $role->save();

    }
}
