<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ValidatorExtended;

class ValidatorServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::resolver(function ($translator, $data, $rules, $messages) {
            return new ValidatorExtended($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
