<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')-> insert([

                'name'=> 'Acción',                
            ]);

            DB::table('category')-> insert([

                'name'=> 'Arcade',                
            ]);
    
            DB::table('category')-> insert([

                'name'=> 'Deportivo',                
            ]);

            DB::table('category')-> insert([

                'name'=> 'Simulacion',                
            ]);
    }
}
