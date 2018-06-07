<?php

namespace Peter\Factory;

class NyToysFactory extends ToysFactory
{
    public function createToy($toyName)
    {
        $toy = null;
        $nyComponentsFactory = new NyComponentsFactory();
        if ($toyName === 'car') {
            $toy = new NyCar($nyComponentsFactory);
        } else if ($toyName === 'helicopter') {
            $toy = new NyHelicopter($nyComponentsFactory);
        } else {
            throw new \InvalidArgumentException("The {$toyName} is not a valid toy name.");
        }

        return $toy;
    }
}
