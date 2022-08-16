<?php declare(strict_types=1);

namespace Dive\Fez\Nova;

use Dive\Fez\FezServiceProvider;
use Illuminate\Support\AggregateServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends AggregateServiceProvider
{
    protected $providers = [FezServiceProvider::class];

    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('fez', __DIR__ . '/../dist/js/field.js');
        });
    }
}
