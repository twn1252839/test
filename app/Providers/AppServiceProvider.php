<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    // 全域變數
    // view()->share('key', $value);
    // share 單一頁面
    view()->share(['name' => 'Zack', 'age' =>  18]);
    // composer 分給其他頁面
    view()->composer(['users.index1', 'users.index2'], function ($view) {
      $view->with('name', 'Zack')->with('age', 18);
    });
    // composer 分給所有 users 頁面
    // view()->composer('users.*', function ($view) {
    //   $view->with('name', 'Zack')->with('age', 18);
    // });
  }
}