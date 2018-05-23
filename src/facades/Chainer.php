<?php
namespace Caain\Chainer;

use Illuminate\Support\Facades\Facade;

class ChainerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chainer';
    }
}
