<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('pendientes', function () {
            $user =auth()->user();
            if($user->hasanyrole('admin','super-admin')){
                   $messages = Message::where('read', 0)->get();
                   $total = $messages->count();
            }
            else{
                $enviados = $user->messages;
                $total = 0;
                foreach ($enviados as $r){
                    if($r->read=0){ $total = $total+1;}
                }
            }
            return $total;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
