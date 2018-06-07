<?php

namespace Peter\Factory;

class NyComponentsFactory extends ComponentsFactory
{
    public function createEngine()
    {
        return new NyEngine();
    }

    public function createWheel()
    {
        return new NyWheel();
    }

    public function createRotorBlade()
    {
        return new NyRotorBlade();
    }
}
