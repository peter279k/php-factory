<?php

namespace Peter\Factory;

abstract class ComponentsFactory
{
    abstract public function createEngine();
    abstract public function createWheel();
    abstract public function createRotorBlade();
}
