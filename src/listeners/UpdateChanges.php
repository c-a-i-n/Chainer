<?php

namespace Caain\Chainer\Listeners;

use Caain\Chainer\Events\StatusUpdate;

class UpdateChanges
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\StatusUpdate  $event
     * @return boolean
     */
    public function handle(StatusUpdate $event)
    {
        // Access the order using $event->order...
        return true;
    }
    /**
     * Handle a job failure.
     *
     * @param  \App\Events\StatusUpdate  $event
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(StatusUpdate $event, $exception)
    {
        //
    }
}
