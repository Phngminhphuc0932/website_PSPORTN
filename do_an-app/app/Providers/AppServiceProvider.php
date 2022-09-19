<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

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
        //

        /*load gio hang cho tat ca*/
        // $tong_so_luong = 0;
        // if(Session::has('gio_hang')){
        //     $gio_hang = Session::get('gio_hang');
        //     for ($i = 0; $i < count($gio_hang); $i++){
        //         $tong_so_luong += $gio_hang[$i]->so_luong;
        //     }
        // }

        // View::share('tong_so_luong', $tong_so_luong);
        // $gio_hang = [];
        // if(Session::has('gio_hang')){
        //     $gio_hang = Session::get('gio_hang');

        // }

        // View::share('gio_hang', $gio_hang);
    }


}
