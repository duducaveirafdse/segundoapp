<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        DB::table('posts')->insert([
            'title'         =>      'Primeira Postagem',
            'description'   =>      'Testando Seeds',
            'content'       =>      'Aprendendo a utilizar o recurso de Seeds do Laravel para popular o banco de dados!',
            'slug'          =>      'primeira-postagem',
            'user_id'       =>      1,
            'is_active'     =>      true
        ]);
        */
        factory(\App\Post::class,30)->create();
    }
}
