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
                          
            ]);

        	DB::table('game')-> insert([

                'name'=> 'Grand Thef Auto V',  
                'image_url'=>'../images/ima3.png',
                'description'=>'Se trata de una aventura de acción de mundo abierto con multitud de misiones en la que encarnamos a tres personajes distintos: Trevor, Michael y Franklin.',
                'price'=>'1000', 
                'fk_id_category'=> 1,  
                'fk_id_user'=> 2,

            ]);
            
            DB::table('game')-> insert([

                'name'=> 'COD: Modern Warfare',  
                'image_url'=>'../images/ima6.png',
                'description'=>'Call of Duty regresa un año más en esta ocasión de la mano de Infinity Ward que ha decidido realizar un atrevido reinicio a Modern Warfare, la subsaga más famosa de la licencia que tantos buenos momentos ha dado a los amantes de este FPS.',
                'price'=>'1100',
                'fk_id_category'=> 1,
                'fk_id_user'=> 2,
                              
            ]);
    }
}
