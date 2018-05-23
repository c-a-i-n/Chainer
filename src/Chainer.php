<?php

namespace Caain\Chainer;

class Chainer
{
    protected $chain;

    private function createElement()
    //simple element -> like date, boolean etc.
    {
    }
    protected function createNode()
    // like multiif etc
    {
    }
    protected function createEvent()
    {
    }
    public function createChain(object $json)
    {
        $this->chain = $json;
        return $this;
    }

    public function updateMatrix()
    {
    }
}
