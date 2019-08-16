<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;

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
            }
    }