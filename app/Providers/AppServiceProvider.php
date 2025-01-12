<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureModel();
        $this->configureDatabase();
        $this->configureUrl();
    }

    private function configureModel(): void
    {
        Model::unguard();
    }

    private function configureDatabase(): void
    {
        if(app()->isProduction()){
            DB::prohibitDestructiveCommands();
        }
    }

    private function configureUrl(): void
    {
        if(app()->isProduction()){
            URL::forceScheme('https');
        }
    }
}
