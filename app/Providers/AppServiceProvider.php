<?php

namespace App\Providers;

use Spatie\Activitylog\Models\Activity;
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
        Activity::saving(function (Activity $activity) {
            $user = auth()->user();
            if ($user) {
                $activity->causer_id = $user->id;
                $activity->causer_type = get_class($user);
            }
        });
    }
}
