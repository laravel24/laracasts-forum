<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

  public function boot()
  {
    \View::composer('*', function($view) {
      $channels = \Cache::rememberForever('channels', function() {
        return \App\Channel::all();
      });

      $view->with('channels', $channels);
    });
  }

  public function register()
  {
    if($this->app->isLocal()) {
      $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
    }
  }

}
