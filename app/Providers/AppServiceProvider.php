<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $obSections = [];
        Blade::directive('obstart', function($var = 'default') use ($obSections) {
            return "<?php obstart($var); ?>";
        });
        Blade::directive('obend', function() {
            return '<?php obend(); ?>';
        });
        Blade::directive('obget', function($var = 'default') use ($obSections) {
            return "<?php obget($var); ?>";
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
