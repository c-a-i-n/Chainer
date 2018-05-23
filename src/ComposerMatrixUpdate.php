<?php

namespace Caain\Chainer;

use Composer\Script\Event;

class ComposerMatrixUpdate
{
    public static function updateMatrix(Event $event)
    {
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        require $vendorDir . '/Matrix/config.php';

        echo "true";
    }
}
