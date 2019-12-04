<?php

use App\Comun_Part;
use Illuminate\Database\Seeder;

class partiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Comun_parts = ['Escalier', 'Palier', 'Sous-sol', 'Parking', 'toit', 'Cave', 'Grenier', 'Jardin',];
        foreach ($Comun_parts as $CP) {
            $Comun_parts = new Comun_Part();
            $Comun_parts->nom = $CP;
            $Comun_parts->save();
        }
    }

}
