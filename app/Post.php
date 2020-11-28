<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // caso queira utilizar uma nomenclatura diferente para a tabela
    // protected $table = 'db_postagens';
    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'is_active',
        'user_id'
        // 'autor_id'
    ];

    // criando uma função para especificar o relacionamento entre os models 'User' e 'Post'
    public function user() {
        return $this->belongsTo(User::class);
        /**
         * supondo que você tenha utilizado outra nomenclatura para o campo chave estrangeira
         * no banco de dados, precisará informar o nome deste campo dentro da função para que o
         * Laravel/Eloquent consigam localizar o campo na tabela do banco
         * return $this->belongsTo(User::class,'autor_id');
         */
    }

    // criar uma nova função para especificar o relacionamento entre os models 'Category' e 'Post'
    public function categories() {
        return $this->belongsToMany(Category::class,'posts_categories');
    }
}
