<?php

namespace App\Providers;


use App\Validators\RentHouseValidator;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\CssSelector\Node\FunctionNode;

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
        Validator::extend('max_lenght', RentHouseValidator::class, 'lenght is not greater than 20');
        Validator::extend('invalid_date', Function($attribute, $value, $parameters, $validator){
            $date = Carbon::now();
            return $value > $date;
        }
        , 'Your date is expired');
        if($this->app->environment('production') || $this->app->environment('staging'))
        {
            \URL::forceScheme('https');
        }
    }
}
