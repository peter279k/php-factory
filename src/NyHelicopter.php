<?php

namespace Peter\Factory;

class NyHelicopter extends Toy
{
    public $name  = 'NyHelicopter';
    public $price = 300000;
    public $componentsFactory = null;

    public function  __construct(ComponentsFactory $componentsFactory)
    {
        $this->componentsFactory = $componentsFactory;
    }

    public function prepare()
    {
        $this->engine      = $this->componentsFactory->createEngine();
        $this->rotorBlade  = $this->componentsFactory->createRotorBlade();
    }
}
