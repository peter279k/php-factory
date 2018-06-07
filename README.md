# php-factory

[![Build Status](https://travis-ci.org/peter279k/php-factory.svg?branch=master)](https://travis-ci.org/peter279k/php-factory)
[![Coverage Status](https://coveralls.io/repos/github/peter279k/php-factory/badge.svg?branch=master)](https://coveralls.io/github/peter279k/php-factory?branch=master)

## Introduction

It's about the factory design pattern implementation in this [blog post](https://www.startutorial.com/articles/view/understanding-design-patterns-abstract-factory#top).

## Usage

Here is the example of creating the ```NyCar``` and ```NyHelicopter``` class instance via ```NyToysFactory```.

```NyCar``` class instance:

```
$nyToyFactory = new NyToysFactory();
$nyCar = $nyToyFactory->createToy('car'));

echo $nyCar->price; //30
echo $nyCar->name; //NyCar
```

```NyHelicopter``` class instance:

```
$nyToyFactory = new NyToysFactory();
$nyHelicopter = $nyToyFactory->createToy('helicopter'));

echo $nyHelicopter->price; //300000
echo $nyHelicopter->name; //NyHelicopter
```
