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
            ['car', NyCar::class, 30, 'NyCar', 'NyCar is packaged', 'NyCar is priced at 30'],
            ['helicopter', NyHelicopter::class, 300000, 'NyHelicopter', 'NyHelicopter is packaged', 'NyHelicopter is priced at 300000'],
        ];
    }

    /**
     * @dataProvider toyDataProvider
     */
    public function testCreateToy($toyName, $expectedInstance, $expectedPrice, $expectedName, $expectedPackage, $expectedLabel)
    {
        $nyToyFactory = new NyToysFactory();
        $nyToy = $nyToyFactory->createToy($toyName);

        $this->assertInstanceOf($expectedInstance, $nyToy);
        $this->assertSame($expectedPrice, $nyToy->price);
        $this->assertSame($expectedName, $nyToy->name);
        $this->assertSame($expectedPackage, $nyToy->package());
        $this->assertSame($expectedLabel, $nyToy->label());
    }

    public function testCreateToyWithInvalidToyName()
    {
        $nyToyFactory = new NyToysFactory();

        $this->expectException(\InvalidArgumentException::class);
        $nyToyFactory->createToy('invalid_toy_name');
    }
}
