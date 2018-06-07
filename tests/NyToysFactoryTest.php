<?php

namespace Peter\Factory\Tests;

use Peter\Factory\NyToysFactory;
use Peter\Factory\NyCar;
use Peter\Factory\NyHelicopter;
use PHPUnit\Framework\TestCase;

class NyToysFactoryTest extends TestCase
{
    public function toyDataProvider()
    {
        return [
            ['car', NyCar::class],
            ['helicopter', NyHelicopter::class],
        ];
    }

    /**
     * @dataProvider toyDataProvider
     */
    public function testCreateToy($toyName, $expectedInstance)
    {
        $nyToyFactory = new NyToysFactory();

        $this->assertInstanceOf($expectedInstance, $nyToyFactory->createToy($toyName));
    }

    public function testCreateToyWithInvalidToyName()
    {
        $nyToyFactory = new NyToysFactory();

        $this->expectException(\InvalidArgumentException::class);
        $nyToyFactory->createToy('invalid_toy_name');
    }
}
