<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Patrimonio extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $table='patrimonio';
    protected $fillable=[
        'id_user',
        'saldo_actual',
        
    ];
    protected $guarded=[

    ];

    
        

    
}
