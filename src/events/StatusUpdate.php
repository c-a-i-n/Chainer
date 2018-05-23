<?php

namespace Caain\Chainer\Events;

use Caain\Chainer\Chainer;
use Illuminate\Queue\SerializesModels;

class StatusUpdate
{
    use SerializesModels;

    public $chainer;

    /**
     * Create a new event instance.
     *
     * @param  \Cain\Chainer\Chainer  $chainer
     * @return void
     */
    public function __construct(Chainer $chainer)
    {
        $this->chainer = $chainer;
    }
}
