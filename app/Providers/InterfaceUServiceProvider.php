<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;
use App\Repositories\Movement_type\MovimientoRepository;
use App\Repositories\Movement\MovementRepository;

class InterfaceUServiceProvider extends ServiceProvider
    {
        public function register()
            {

            }


        public function boot()
            {
                $this->app->bind('App\Repositories\User\InterfaceUser', function($app){
                    return new UserRepository();
                });

                $this->app->bind('App\Repositories\Movement_type\InterfaceMovementType', function($app){
                    return new MovimientoRepository();
                });

                $this->app->bind('App\Repositories\Movement\InterfaceMovement', function($app){
                    return new MovementRepository();
                });
            }
    }