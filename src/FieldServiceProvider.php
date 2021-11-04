<?php declare(strict_types=1);

namespace Dive\Fez\Nova;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function () {
            Nova::script('fez', __DIR__ . '/../dist/js/field.js');
        });
    }
}
