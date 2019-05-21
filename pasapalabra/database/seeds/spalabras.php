<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\palabra;


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
            6 => 'Dado',
            7 => 'Doctor',
            8 => 'Espejo',
            9 => 'Embudo',
            10 => 'Fusible',
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
            22 => 'Lampara',
            23 => 'Luna',
            24 => 'Mesa',
            25 => 'Mapa',
            26 => 'Nube',
            27 => 'Nuez',
            28 => 'Oreja',
            29 => 'Ola',
            30 => 'Peinar',
            31 => 'Pila',
            32 => 'Queso',
            33 => 'Quirofano',
            34 => 'Rueda',
            35 => 'Rana',
            36 => 'Sombrilla',
            37 => 'Silla',
            38 => 'Taza',
            39 => 'Tambor',
            40 => 'Universo',
            41 => 'Urna',
            42 => 'Vela',
            43 => 'Ventilar',
            44 => 'Xilofono',
            45 => 'Xenofobo',
            46 => 'Yate',
            47 => 'Yogur',
            48 => 'Zapatos',
            49 => 'Zangano'
        );
        $descripcion = array(
            0 => 'Utensilio para dar o darse aire que está formado por una serie de varillas unidas radialmente por un extremo y cubiertas por una pieza generalmente semicircular de tela, papel o piel decorados.',
            1 => 'Aeronave con alas propulsada horizontalmente por uno o varios motores.',
            2 => 'Embarcación con el fondo cóncavo y con cubierta.',
            3 => 'Pelota grande llena de aire que se utiliza para jugar o para practicar determinados deportes.',
            4 => 'Mamífero équido, macho, de tamaño mediano o grande, pelo corto de color generalmente uniforme y orejas cortas; se domestica con facilidad y suele usarse para la monta.',
            5 => 'Fruto del cerezo, pequeño y redondeado, de color rojo oscuro, pulpa dulce y jugosa y un hueso en su interior.',
            6 => 'Pieza cúbica que se usa en juegos de azar y en cuyas caras hay puntos, de uno hasta seis, o figuras distintas.',
            7 => 'Persona que ha conseguido el último grado académico en la universidad, después de haber defendido una tesis doctoral.',
            8 => 'Superficie de cristal, cubierta en su cara posterior por una capa de mercurio o por una plancha de metal, en la que se reflejan la luz y las imágenes de los objetos que hay delante.',
            9 => 'Instrumento para trasvasar líquidos a recipientes de boca estrecha sin derramarlos.',
            10 => 'Componente eléctrico hecho de un material conductor, generalmente estaño, se coloca en un punto del circuito eléctrico para interrumpir la corriente cuando esta es excesiva.',
            11 => 'Congunto de personas reacionadas por sangre que combiben en un mismo lugar.',
            12 => 'Prenda que cubre y protege la mano.',
            13 => 'Instrumento musical de cuerda formado por una caja hueca de madera de forma alargada con un leve estrechamiento en la parte media, un agujero circular en el centro y un brazo a lo largo del cual se prolongan las cuerdas.',
            14 => 'Herramienta para cortar madera.',
            15 => 'Cuerpo sólido y cristalino en que se convierte el agua por el descenso de la temperatura.',
            16 => 'Porción de tierra rodeada de agua por todas partes.',
            17 => 'Máquina que se conecta a una computadora electrónica y que sirve para imprimir la información seleccionada contenida en ella.',
            18 => 'Recipiente cilíndrico con asa para beber.',
            19 => 'Objeto de adorno o de uso, hecho de algún metal noble y a veces decorado con perlas o piedras preciosas.',
            20 => 'Canoa individual de remo, cubierta de pieles, que utilizan los esquimales.',
            21 => 'Fruto de este arbusto, comestible, de forma ovalada, piel delgada y vellosa, de color verde pardusco y pulpa jugosa, de color verde brillante y con diminutas semillas dispuestas en torno a un corazón blanco.',
            22 => 'Utensilio que proporciona luz artificialmente.',
            23 => 'Cuerpo celeste que gira alrededor de un planeta.',
            24 => 'Mueble formado por un tablero horizontal, sostenido por uno o varios pies, con la altura conveniente para poder realizar alguna actividad sobre ella o dejar cosas encima.',
            25 => 'Representación geográfica de la Tierra, o de parte de ella, sobre una superficie plana, de acuerdo con una escala.',
            26 => 'Masa visible suspendida en la atmósfera, de color y densidad variables, formada por la acumulación de partículas diminutas de agua, o de agua y hielo, como consecuencia de la condensación del vapor de agua atmosférico.',
            27 => 'Prominencia que forma la laringe en la parte anterior del cuello del hombre adulto.',
            28 => 'Parte externa del oído del hombre y otros mamíferos, formada por un repliegue cutáneo sostenido por una lámina cartilaginosa.',
            29 => 'Onda de gran amplitud que se forma en la superficie del agua a causa del viento o de las corrientes.',
            30 => 'Arreglar o desenredar el pelo.',
            31 => 'Conjunto de cosas dispuestas unas sobre otras a modo de columna.',
            32 => 'Alimento sólido que se obtiene por maduración de la cuajada de la leche una vez eliminado el suero.',
            33 => 'Quirofano',
            34 => 'Objeto circular, de poco grosor respecto a su radio, que puede girar sobre un eje de múltiples aplicaciones.',
            35 => 'Traje de niño formado por bombacho y blusa en una sola pieza que en la parte de la entrepierna lleva botones o automáticos para facilitar el cambio de pañal.',
            36 => 'Utensilio plegable y portátil, parecido a un paraguas, para protegerse del sol.',
            37 => 'Asiento individual con patas y respaldo.',
            38 => 'Recipiente que sirve para beber líquidos, en especial bebidas calientes, como café o té',
            39 => 'Instrumento musical de percusión formado por una caja de forma más o menos cilíndrica cerrada por una parte o por las dos con un parche de cuero tensado o con una membrana de material plástico.',
            40 => 'Conjunto de todo lo que tiene existencia física, en la Tierra y fuera de ella.',
            41 => 'Caja de forma rectangular con tapa y cerradura, que tiene una ranura en la parte superior de la tapa por la que se introducen las papeletas en las votaciones secretas o los números en los sorteos.',
            42 => 'Objeto para alumbrar que consiste en una pieza, generalmente cilíndrica, de cera u otra materia grasa con una mecha en su interior que sobresale por el extremo por el que se enciende.',
            43 => 'Hacer que circule o penetre el aire en un lugar.',
            44 => 'Instrumento musical de percusión formado por una serie de láminas de madera dispuestas horizontalmente y ordenadas según su tamaño.',
            45 => 'Persona que rechaza a los extrangeros',
            46 => 'Embarcación de recreo a motor o a vela, de manga o anchura mayor que un velero, con camarotes y generalmente lujosa.',
            47 => 'Alimento líquido y espeso o pastoso, de sabor agrio, que se obtiene por fermentación de la leche de vaca entera o desnatada.',
            48 => 'Plural de calzado que cubre total o parcialmente el pie sin sobrepasar el tobillo.',
            49 => 'Abeja macho, cuya función es fecundar a la abeja reina; es mayor que las abejas obreras, no produce miel y carece de aguijón.'
        );
        $dificultad = array(
            0 => '0',
            1 => '1',
            2 => '0',
            3 => '1',
            4 => '0',
            5 => '1',
            6 => '0',
            7 => '1',
            8 => '0',
            9 => '1',
            10 => '0',
            11 => '1',
            12 => '0',
            13 => '1',
            14 => '0',
            15 => '1',
            16 => '0',
            17 => '1',
            18 => '0',
            19 => '1',
            20 => '0',
            21 => '1',
            22 => '0',
            23 => '1',
            24 => '0',
            25 => '1',
            26 => '0',
            27 => '1',
            28 => '0',
            29 => '1',
            30 => '0',
            31 => '1',
            32 => '0',
            33 => '1',
            34 => '0',
            35 => '1',
            36 => '0',
            37 => '1',
            38 => '0',
            39 => '1',
            40 => '0',
            41 => '1',
            42 => '0',
            43 => '1',
            44 => '0',
            45 => '1',
            46 => '0',
            47 => '1',
            48 => '0',
            49 => '1'
        );
        //letras
        //ABCDEFGHIJKLMNOPQRSTUVXYZ 
        $letra = array(
            0 => 'A',
            1 => 'A',
            2 => 'B',
            3 => 'B',
            4 => 'C',
            5 => 'C',
            6 => 'D',
            7 => 'D',
            8 => 'E',
            9 => 'E',
            10 => 'F',
            11 => 'F',
            12 => 'G',
            13 => 'G',
            14 => 'H',
            15 => 'H',
            16 => 'I',
            17 => 'I',
            18 => 'J',
            19 => 'J',
            20 => 'K',
            21 => 'K',
            22 => 'L',
            23 => 'L',
            24 => 'M',
            25 => 'M',
            26 => 'N',
            27 => 'N',
            28 => 'O',
            29 => 'O',
            30 => 'P',
            31 => 'P',
            32 => 'Q',
            33 => 'Q',
            34 => 'R',
            35 => 'R',
            36 => 'S',
            37 => 'S',
            38 => 'T',
            39 => 'T',
            40 => 'U',
            41 => 'U',
            42 => 'V',
            43 => 'V',
            44 => 'X',
            45 => 'X',
            46 => 'Y',
            47 => 'Y',
            48 => 'Z',
            49 => 'Z'
        );
        
        for ($i=0; $i<50; $i++){
            $palabras = $palabra[$i];
            $descripciones = $descripcion[$i];
            $dificultades = $dificultad[$i];
            $letras = $letra[$i];
            palabra::create([
                'Letra'      => $letras,
                'Palabra' 	 =>	$palabras,
                'Tipo'       => 'Empieza',
                'Descripcion'=> $descripciones,
                'Dificultad' =>	$dificultades,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
       
        
    }
}
