<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class TipoMovimiento extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $table='tipo_movimiento';
    protected $fillable=[
        'descripcion',
        'tipo',
        
    ];
    protected $guarded=[

    ];

    public function movement()
        {
            return $this->hasMany(movimiento::class,'id_tipo_movimiento');
        }

        public function scopeSearch($query, $search, $parameter)
        {
            if(trim($search) != "" && trim($parameter) != "")
            {
                if($parameter === "descripcion" || $parameter === "tipo")
                    {
                        $query->where($parameter,'like','%'.$search.'%');
                    }
               
            }
           
        }

    
}