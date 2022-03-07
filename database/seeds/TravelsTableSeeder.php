<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++){
            $infoTravel = new Travel();
            $infoTravel->agenzia = $faker->word();
            $infoTravel->destinazione = $faker->word();
            $infoTravel->stazione_aeroporto_partenza = $faker->word();
            $infoTravel->stazione_aeroporto_arrivo = $faker->word();
            $infoTravel->hotel = $faker->word();
            $infoTravel->codice_treno_aereo = $faker->numberBetween(5, 10);
            $infoTravel->stazione_arrivo = $faker->word();
            $infoTravel->giorno_partenza_andata = $faker->dateTime();
            $infoTravel->orario_partenza_andata = $faker->time();
            $infoTravel->giorno_partenza_ritorno = $faker->dateTime();
            $infoTravel->orario_partenza_ritorno = $faker->time();
            $infoTravel->prezzo = $faker->numberBetween(100, 1000);
        }
    }
}
