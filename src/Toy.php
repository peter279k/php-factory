<?php

namespace Peter\Factory;

abstract class Toy
{
    public $name    = '';
    public $price   = 0;
    public $engine  = null;
    public $wheels  = [];
    public $rotorBlade = null;
    abstract function prepare() ;
    public function package()
    {
        return $this->name. ' is packaged';
    }

    public function label()
    {
        return $this->name . ' is priced at '.$this->price;
    }
}
