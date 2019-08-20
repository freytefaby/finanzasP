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

   
    public function scopeSearch($query, $search, $parameter)
        {
            if(trim($search) != "" && trim($parameter) != "")
            {
                if($parameter === "movimientos.descripcion" || $parameter === "u.name"  )
                    {
                        $query->where($parameter,'like','%'.$search.'%');
                    }
               
            }
           
        }


        public function scopeDate($query, $date1,$date2)
        {
            if(trim($date1) != "" && trim($date2) != "")
            {
               
                $query->whereBetween('movimientos.created_at', [$date1, $date2]);
               
            }
           
        }

        public function scopeState($query, $state)
        {
            if(trim($state)!="" && $state!=2)
                {
                    $query->where('movimientos.state',$state);
                }
        }

        public function scopeOrder($query,$order,$direction)
        {
            if(trim($order)!="" && trim($direction)!="" )
            {
                if($direction === "movimientos.id" || $direction === "u.name" || $direction === "movientos.descripcion" || $direction === "lastname_1" || $direction === "lastname_2" || $direction === "business_name" || $direction === "phone_number" || $direction === "adress" || $direction === "description" || $direction==="username" && $order==="desc" || $order==="asc")
                {
                    $query->orderBy($direction,$order);
                }
               
            }
            
        }

        

    
}
