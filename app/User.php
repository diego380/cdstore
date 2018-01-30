<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name', 'email', 'password','admin','cpf','data_nascimento','telefone_contato'
    ];

    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','admin'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'data_nascimento'
    ];

    public function setDataNascimentoAttribute($value)
    {
        $this->attributes['data_nascimento'] =  Carbon::parse($value);
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] =  preg_replace('/[^0-9]/', '', $value);
    }

    public function setTelefoneContatoAttribute($value)
    {
        $this->attributes['telefone_contato'] =  preg_replace('/[^0-9]/', '', $value);
    }
}
