<?php
namespace App\Repositories\User;
interface InterfaceUser{

    public function Login($data);
    public function Logout();
}