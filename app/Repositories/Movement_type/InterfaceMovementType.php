<?php
namespace App\Repositories\Movement_type;
interface InterfaceMovementType{

    public function index($data); //pk
    public function create($data); //pk
    public function updating($data); //ok
    public function findId($data); //ok
}