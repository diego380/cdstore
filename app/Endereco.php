<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
    	'logradouro',
    	'numero',
    	'bairro',
    	'cidade',
    	'estado',
    	'cep',
    	'complemento',
    	'referencia',
    	'user_id'
    ];

    protected $table = 'enderecos';

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
