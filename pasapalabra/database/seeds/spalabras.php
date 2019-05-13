<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Palabras;


class spalabras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palabra = array(
            0 => 'Abanico',
            1 => 'Avion',
            2 => 'Barco',
            3 => 'Balon',
            4 => 'Caballo',
            5 => 'Cereza',
            6 => 'Dados',
            7 => 'Doctor',
            8 => 'Espejo',
            9 => 'Embudo',
            10 => 'Fosforo',
            11 => 'Familia',
            12 => 'Guante',
            13 => 'Guitarra',
            14 => 'Hacha',
            15 => 'Hielo',
            16 => 'Isla',
            17 => 'Impresora',
            18 => 'Jarra',
            19 => 'Joya',
            20 => 'Kayac',
            21 => 'Kiwi',
            22 => 'Kayac',
            23 => 'Lampara',
            24 => 'Luna',
            25 => 'Mesa',
            26 => 'Mapa',
            27 => 'Nube',
            28 => 'Nuez',
            29 => 'Oreja',
            30 => 'Ola',
            31 => 'Peine',
            32 => 'Pila',
            33 => 'Queso',
            34 => 'Quirofano',
            35 => 'Rueda',
            36 => 'Rana',
            37 => 'Sombrilla',
            38 => 'Silla',
            39 => 'Taza',
            40 => 'Tambor',
            41 => 'Universo',
            42 => 'Urna',
            43 => 'Vela',
            44 => 'Ventilador',
            45 => 'Xilofono',
            46 => 'Xenon',
            47 => 'Yate',
            48 => 'Yogur',
            49 => 'Zapatos',
            50 => 'Zafiro'
        );
        $descripcion = array(
           0 => 'Abanico',
            1 => 'Avion',
            2 => 'Barco',
            3 => 'Balon',
            4 => 'Caballo',
            5 => 'Cereza',
            6 => 'Dados',
            7 => 'Doctor',
            8 => 'Espejo',
            9 => 'Embudo',
            10 => 'Fosforo',
            11 => 'Familia',
            12 => 'Guante',
            13 => 'Guitarra',
            14 => 'Hacha',
            15 => 'Hielo',
            16 => 'Isla',
            17 => 'Impresora',
            18 => 'Jarra',
            19 => 'Joya',
            20 => 'Kayac',
            21 => 'Kiwi',
            22 => 'Kayac',
            23 => 'Lampara',
            24 => 'Luna',
            25 => 'Mesa',
            26 => 'Mapa',
            27 => 'Nube',
            28 => 'Nuez',
            29 => 'Oreja',
            30 => 'Ola',
            31 => 'Peine',
            32 => 'Pila',
            33 => 'Queso',
            34 => 'Quirofano',
            35 => 'Rueda',
            36 => 'Rana',
            37 => 'Sombrilla',
            38 => 'Silla',
            39 => 'Taza',
            40 => 'Tambor',
            41 => 'Universo',
            42 => 'Urna',
            43 => 'Vela',
            44 => 'Ventilador',
            45 => 'Xilofono',
            46 => 'Xenon',
            47 => 'Yate',
            48 => 'Yogur',
            49 => 'Zapatos',
            50 => 'Zafiro'
        );
        $dificultad = array(
            0 => 'Facil',
            1 => 'Normal',
            2 => 'Facil',
            3 => 'Normal',
            4 => 'Facil',
            5 => 'Normal',
            6 => 'Facil',
            7 => 'Normal',
            8 => 'Facil',
            9 => 'Normal',
            10 => 'Facil',
            11 => 'Normal',
            12 => 'Facil',
            13 => 'Normal',
            14 => 'Facil',
            15 => 'Normal',
            16 => 'Facil',
            17 => 'Normal',
            18 => 'Facil',
            19 => 'Normal',
            20 => 'Facil',
            21 => 'Normal',
            22 => 'Facil',
            23 => 'Normal',
            24 => 'Facil',
            25 => 'Normal',
            26 => 'Facil',
            27 => 'Normal',
            28 => 'Facil',
            29 => 'Normal',
            30 => 'Facil',
            31 => 'Normal',
            32 => 'Facil',
            33 => 'Normal',
            34 => 'Facil',
            35 => 'Normal',
            36 => 'Facil',
            37 => 'Normal',
            38 => 'Facil',
            39 => 'Normal',
            40 => 'Facil',
            41 => 'Normal',
            42 => 'Facil',
            43 => 'Normal',
            44 => 'Facil',
            45 => 'Normal',
            46 => 'Facil',
            47 => 'Normal',
            48 => 'Facil',
            49 => 'Normal',
            50 => 'Facil',
        );
        
        
        for ($i=1; $i<50; $i++){
            $rand_palabras = $i;
            $palabras = $palabra[$rand_palabras];
            $rand_descripcion = $i;
            $descripciones = $descripcion[$rand_descripcion];
            $rand_dificultad = $i;
            $dificultades = $dificultad[$rand_dificultad];
            Palabras::create([
                'Palabra' 	 =>	$palabras,
                'Descripcion'=> $descripciones,
                'Dificultad' =>	$dificultades,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
       
        
    }
}
