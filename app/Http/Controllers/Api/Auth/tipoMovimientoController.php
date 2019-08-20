<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Movement_type\InterfaceMovementType;
use App\Http\Requests\GetRequest\RequestGet;
use App\Http\Requests\TipoC;
use App\Http\Requests\TipoU;



class tipoMovimientoController extends Controller
{
    private $tipo;
    public function __construct(InterfaceMovementType $tipo)
    {
        $this->tipo=$tipo;
    }

    public function index(RequestGet $request)
        {
           return $this->tipo->index($request);
        }
    public function create(TipoC $request)
        {
            return $this->tipo->create($request);
        }

    public function update(TipoU $request)
        {
            return $this->tipo->updating($request);
        }

    public function findId($id)
        {
            return $this->tipo->findId($id);
        }

    
    
}