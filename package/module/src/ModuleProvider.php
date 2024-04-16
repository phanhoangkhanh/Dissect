<?php

namespace Khanh\Core;

use Illuminate\Support\ServiceProvider;


class ModuleProvider extends ServiceProvider
{

	public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
    
    public function register()
    {
       
    }

}