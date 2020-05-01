<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



       	DB::table('user')->insert([
       		'name'=>'Antoni',
       		'email'=>'trioca-117@hotmail.com',
       		'password'=>bcrypt('123456789'),
       		'fk_id_role'=> 1,
       	]);

       	DB::table('user')->insert([
       		'name'=>'Uriel',
       		'email'=>'Abuelo@gmail.com',
       		'password'=>bcrypt('987654321'),
       		'fk_id_role'=> 2,
       	]);
    }
}
