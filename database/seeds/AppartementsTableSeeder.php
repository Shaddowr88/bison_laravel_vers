<?php

use App\Appartement;
use Illuminate\Database\Seeder;

class AppartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appart= new Appartement();
        $appart->numero ="2634";
        $appart->etage = "3";
        $appart->batiment_id = "1";
        $appart->description = " Appartement 70M carré";
        $appart->save();


        $appart= new Appartement();
        $appart->numero ="2135";
        $appart->etage = "3";
        $appart->batiment_id = "3";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();



        $appart= new Appartement();
        $appart->numero ="2434";
        $appart->etage = "2";
        $appart->batiment_id = "2";
        $appart->description = " Appartement duplex 90M carré";
        $appart->save();


        $appart= new Appartement();
        $appart->numero ="2764";
        $appart->etage = "0";
        $appart->batiment_id = "2";
        $appart->description = " Appartement 50M carré";
        $appart->save();


    }
}
