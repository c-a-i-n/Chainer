<?php

namespace Caain\Chainer;

use Illuminate\Support\ServiceProvider;

class ChainerServiceProvider extends ServiceProvider
{
    /**
     * Register Events for handling Chainer status changes
     *
     * @return void
     */
    protected $listen = [
            'Cain\Chainer\Events\StatusUpdate' => [
            'Cain\Chainer\Listeners\UpdateChanges'
        ]
    ];
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Chainer::class, function () {
            return new Chainer();
        });
        $this->app->alias(Chainer::class, 'chainer');
    }
}
