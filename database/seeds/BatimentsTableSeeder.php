<?php

use Illuminate\Database\Seeder;

class BatimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $batiment = new batiment();
        $batiment ->nom = "B";
        $batiment ->etage = "4";
        $batiment ->adresse = "Bien moins prest";
        $batiment ->save();

        $batiment = new batiment();
        $batiment ->nom = "C";
        $batiment ->etage = "4";
        $batiment ->adresse = "Cour vite";
        $batiment ->save();

        $batiment = new batiment();
        $batiment ->nom = "R";
        $batiment ->etage = "4";
        $batiment ->adresse = "pas loins de moi";
        $batiment ->save();

         $batiment = new batiment();
        $batiment ->nom = "F";
        $batiment ->etage = "5";
        $batiment ->adresse = "loins derrier toi ";
        $batiment ->save();

    }
}
