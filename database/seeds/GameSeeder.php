<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('game')-> insert([

                'name'=> 'Gears of War 5',
                'image_url'=>'../images/ima4.png',
                'description'=>'Gears 5 es un videojuego de acción en tercera persona desarrollado por The Coalition y publicado por Xbox Game Studios para Microsoft Windows y Xbox One. Es la sexta entrega de la saga Gears of War y la secuela directa de Gears of War 4. Fue lanzado el 10 de septiembre de 2019.',
                'price'=>'1250',
                'fk_id_category'=> 1,
                'fk_id_user'=> 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=SEpWlFfpEkU'
            ]);

        	DB::table('game')-> insert([

                'name'=> 'Grand Thef Auto V',
                'image_url'=>'../images/ima3.png',
                'description'=>'Se trata de una aventura de acción de mundo abierto con multitud de misiones en la que encarnamos a tres personajes distintos: Trevor, Michael y Franklin.',
                'price'=>'1000',
                'fk_id_category'=> 1,
                'fk_id_user'=> 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=QkkoHAzjnUs'
            ]);

            DB::table('game')-> insert([

                'name'=> 'COD: Modern Warfare',
                'image_url'=>'../images/ima6.png',
                'description'=>'Call of Duty regresa un año más en esta ocasión de la mano de Infinity Ward que ha decidido realizar un atrevido reinicio a Modern Warfare, la subsaga más famosa de la licencia que tantos buenos momentos ha dado a los amantes de este FPS.',
                'price'=>'1100',
                'fk_id_category'=> 1,
                'fk_id_user'=> 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=bH1lHCirCGI'
            ]);

            DB::table('game')-> insert([

                'name'=> 'Car Mechanic',  
                'image_url'=>'../images/ima15.png',
                'description'=>'La pregunta en este caso es bastante simple, ¿en que momento resulta divertido hacer de mecánico? En serio, ¿de mecánico? Pues si, eso mismo me preguntaba yo cuando acepté el reto de analizar Car Mechanic Simulator. Me confieso un apasionado de los coches, y soy el primero que entre amigos doy mi versión “cuñado” de la avería que tiene, fruto de estar muchos años trabajando al lado del departamento de vehículos de una gran empresa. Pero realmente nunca había estado tan cerca de lo que cuesta arreglar un coche.',
                'price'=>'500',
                'fk_id_category'=> 4,
                'fk_id_user'=> 2,
                              
            ]);
    

            DB::table('game')-> insert([

                'name'=> 'Arcade',  
                'image_url'=>'../images/ima16.png',
                'description'=>'Contiene diferentes juegos, los mas descatados de jugabilidad arcade.',
                'price'=>'400',
                'fk_id_category'=> 2,
                'fk_id_user'=> 2,
                              
            ]);

            DB::table('game')-> insert([

                'name'=> 'Farming Simulator',  
                'image_url'=>'../images/ima17.png',
                'description'=>'La Platinum Edition además incluye una gran expansión con hasta 35 máquinas y herramientas nuevas como la Jaguar 960 TT, o el tractor Xerion 5000. Pero lo que más les va a gustar a los amantes del campo es la inclusión de la marca líder mundial Claas.',
                'price'=>'200',
                'fk_id_category'=> 4,
                'fk_id_user'=> 2,
                              
            ]);


            DB::table('game')-> insert([

                'name'=> 'Fifa 2020',  
                'image_url'=>'../images/ima18.png',
                'description'=>'FIFA 20, la nueva entrega del juego anual de Electronic Arts que llega con un nuevo modo bajo el brazo. Se trata de Volta, que recupera la esencia del fútbol callejero y que, aunque deja a Alex Hunter y su modo historia en el camino, consigue enamorar gracias a su frescura. Este año hay muchas pequeñas novedades que cambian la manera de jugar, y os lo contamos en esta opinión tras pasar unos días con el juego.',
                'price'=>'200',
                'fk_id_category'=> 3,
                'fk_id_user'=> 2,
                              
            ]);
    }
}
