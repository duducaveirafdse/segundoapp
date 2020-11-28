<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // informando os registros que serão inseridos na tabela Users para desenvolvimento
        /*
        DB::table('users')->insert([
            'name'      =>      'Primeiro Usuário',
            'email'     =>      'email@email.com',
            'password'  =>      bcrypt('senha')
        ]);
        */
        // utilizando a ferramenta 'factory' para criar vários usuários por meio da biblioteca 'Faker'
        factory(\App\User::class,10)->create();
    }
}
