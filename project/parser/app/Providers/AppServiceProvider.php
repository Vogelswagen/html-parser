<?php

namespace App\Providers;

use App\Services\Html\IHtmlReceiver;
use App\Services\Html\HtmlReceiverGuzzle;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $bindings = [
        IHtmlReceiver::class => HtmlReceiverGuzzle::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->bindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
