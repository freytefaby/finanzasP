<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class movimiento extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $table='movimientos';
    public $timestamps=false;
    protected $fillable=[
        'id_user',
        'id_tipo_movimiento',
        'descripcion',
        'value',
        'created_at',
        'updated_at'
    ];
    protected $guarded=[

    ];

    public function user()
        {
            $this->belongsTo(User::class);
        }

    
}
