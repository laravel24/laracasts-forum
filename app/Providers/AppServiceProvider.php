<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

  public function boot()
  {
    \View::share('channels', \App\Channel::all());
  }

  public function register()
  {

  }
  
}
