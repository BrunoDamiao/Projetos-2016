<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\CodeAgenda\Entities\Pessoa::class, 30)->create();
        /**
         * Modelos de isenção de dados!
         */
        //factory(Pessoa::class, 30)->create();
        /*DB::table('pessoas')->insert([
            'nome'      => str_random(10),
            'apelido'   => str_random(10),
            'sexo'      => str_random(1),
        ]);*/
    }
}
