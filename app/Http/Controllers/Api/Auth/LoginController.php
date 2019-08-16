<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\User\InterfaceUser;
use App\User;

class LoginController extends Controller
{

    private $userRepo;

    public function __construct(InterfaceUser $userRepo)
    {
        $this->userRepo=$userRepo;
    }

    public function login(Request $request)
    {

     $user=$this->userRepo->Login($request);
     return $user;
    }

    public function refresh(Request $request)
    {
       
    }
    public function logout()
    {
        $user=$this->userRepo->Logout();
        return $user;
    }

    public function prueba(Request $request)
    {

    

    }
}
