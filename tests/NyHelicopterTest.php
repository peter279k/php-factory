<?php

namespace Peter\Factory\Tests;

use Peter\Factory\NyToysFactory;
use Peter\Factory\NyEngine;
use Peter\Factory\NyRotorBlade;
use PHPUnit\Framework\TestCase;

class NyHelicopterTest extends TestCase
{
    public function testPrepare()
    {
        $nyToyFactory = new NyToysFactory();
        $nyHelicopter = $nyToyFactory->createToy('helicopter');
        $nyHelicopter->prepare();

        $this->assertInstanceOf(NyEngine::class, $nyHelicopter->engine);
        $this->assertInstanceOf(NyRotorBlade::class, $nyHelicopter->rotorBlade);
        $this->assertSame('engine', $nyHelicopter->engine->name);
        $this->assertSame(1, $nyHelicopter->rotorBlade->number);
    }
}
