<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

  public function boot()
  {
    \View::composer('*', function($view) {
      $view->with('channels', \App\Channel::all());
    });
  }

  public function register()
  {

  }

}
