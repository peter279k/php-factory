<?php

namespace Peter\Factory;

abstract class Toy
{
    public $name    = '';
    public $price   = 0;
    public $engine  = null;
    public $wheels  = array();
    public $rotorBlade = null;
    abstract function prepare() ;
    public function package()
    {
        echo $this->name. ' is packaged';
    }

    public function label()
    {
        echo $this->name . ' is priced at '.$this->price;
    }
}
