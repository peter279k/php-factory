# php-factory

## Introduction

It's about this factory design pattern implementation in this [blog post](https://www.startutorial.com/articles/view/understanding-design-patterns-abstract-factory#top).

## Usage

Here is the example of creating the ```NyCar``` and ```NyHelicopter``` class instance via Toy factory.

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
