<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $fillable = [

        'nome',
        'telefone',
        'email',
        'user_id'

    ];
    public function User(){

        return $this->belongsTo(User::class);

    }

        
   
}
