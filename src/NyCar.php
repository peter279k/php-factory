<?php

namespace Peter\Factory;

class NyCar extends Toy
{
    public $name  = 'NyCar';
    public $price = 30;
    public $componentsFactory = null;
    public function  __construct(ComponentsFactory $componentsFactory)
    {
        $this->componentsFactory = $componentsFactory;
    }

    public function prepare()
    {
        $this->engine   = $this->componentsFactory->createEngine();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
        $this->wheels[] = $this->componentsFactory->createWheel();
    }
}
