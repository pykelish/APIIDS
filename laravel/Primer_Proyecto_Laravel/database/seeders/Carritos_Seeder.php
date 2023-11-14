<?php

namespace Database\Seeders;
use App\Models\Carrun;
use Illuminate\Database\Seeder;


class Carritos_Seeder extends Seeder

{
    public function run(): void
    {
        $carrun = new Carrun();
        $carrun->nombre = "Tsuru Tuniado";
        $carrun->descripcion = "Es un tsuru tuniado";
        $carrun->anio = 2005;
        $carrun->save();

        $carrun2 = new Carrun();
        $carrun2 ->nombre = "Camaro";
        $carrun2 ->descripcion = "ta perron";
        $carrun2 ->anio = 2018;
        $carrun2 ->save();

    }
}
