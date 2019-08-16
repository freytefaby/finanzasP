<?php
namespace App\Repositories\User;
interface InterfaceUser{

    public function Login($data);
    public function Logout();
    public function create($data);
    public function userId($data);
    public function updateUser($data);
}