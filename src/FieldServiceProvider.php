<?php

namespace Outhebox\NovaFieldsAgent;

use Laravel\Nova\Fields\Field;
use Illuminate\Support\ServiceProvider;
use Outhebox\NovaFieldsAgent\NovaFieldsAgent;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Field::macro('HideFromIndexOnMobile', function() {
            return NovaFieldsAgent::HideFromIndexOnMobile($this);
        });

        Field::macro('HideFromIndexOnTablet', function() {
            return NovaFieldsAgent::HideFromIndexOnTablet($this);
        });

        Field::macro('hideFromDetailOnMobile', function() {
            return NovaFieldsAgent::hideFromDetailOnMobile($this);
        });

        Field::macro('hideFromDetailOnTablet', function() {
            return NovaFieldsAgent::hideFromDetailOnTablet($this);
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
