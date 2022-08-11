<?php

namespace Outl1ne\NovaTrumbowygField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('o1-trumbowyg-field', __DIR__ . '/../dist/js/entry.js');
            Nova::style('o1-trumbowyg-field', __DIR__ . '/../dist/css/entry.css');
        });
    }
}
