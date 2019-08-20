<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Movement\InterfaceMovement;
use App\Http\Requests\GetRequest\RequestGet;

class MovementController extends Controller
{
    private $movimiento;

    public function __construct(InterfaceMovement $movimiento)
    {
        $this->movimiento=$movimiento;
    }

    public function index(Request $request)
        {
            return $this->movimiento->index($request);
        }

}