<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Movimiento extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $table='movimientos';
    protected $fillable=[
        'id_user',
        'id_tipo_movimiento',
        'descripcion',
        'value'
    ];
    protected $guarded=[

    ];

    public function user()
        {
            $this->belongsTo(User::class);
        }

        public function typeMovement()
        {
            $this->belongsTo(TipoMovimiento::class);
        }

    public function scopeSearch($query, $search, $parameter)
        {
            if(trim($search) != "" && trim($parameter) != "")
            {
                if($parameter === "movimientos.descripcion" || $parameter === "u.name" || $parameter === "u.name" )
                    {
                        $query->where($parameter,'like','%'.$search.'%');
                    }
               
            }
           
        }

        

    
}
