<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\User;

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

    public function users()
    {
        return $this->belongsToMany(User::class,'movimientos','id_user','id_tipo_movimiento')->withPivot('descripcion','value','state');
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