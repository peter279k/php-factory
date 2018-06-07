<?php

namespace Peter\Factory\Tests;

use Peter\Factory\NyToysFactory;
use Peter\Factory\NyWheel;
use PHPUnit\Framework\TestCase;

class NyCarTest extends TestCase
{
    public function testPrepare()
    {
        $nyToyFactory = new NyToysFactory();
        $nyCar = $nyToyFactory->createToy('car');
        $nyCar->prepare();
        $wheels = $nyCar->wheels;

        $this->assertCount(4, $wheels);

        foreach($wheels as $nyWheel) {
            $this->assertInstanceOf(NyWheel::class, $nyWheel);
            $this->assertSame('wheel', $nyWheel->name);
            $this->assertSame(1, $nyWheel->number);
        }
    }
}
