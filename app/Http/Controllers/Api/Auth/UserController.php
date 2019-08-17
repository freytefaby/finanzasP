<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\User\InterfaceUser;
use App\Http\Requests\userC;
use App\Http\Requests\userU;


class UserController extends Controller
{
    private $userRepo;
    public function __construct(InterfaceUser $userRepo)
    {
        $this->userRepo=$userRepo;
    }

    public function create(userC $request)
        {
           return $this->userRepo->create($request);
        }
    public function userId(Request $request)
        {
            return $this->userRepo->userId($request);
        }
    public function update(userU $request)
        {
           return $this->userRepo->updateUser($request);
        }

    public function updatePass()
        {
           return $this->userRepo->updatePass('hola');
        }
}