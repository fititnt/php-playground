<?php

//http://php.net/manual/pt_BR/language.oop5.traits.php
class Base
{

    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{

    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

// Hello World!

echo PHP_EOL . '-----------------------------------' . PHP_EOL;

trait Hello
{

    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait World
{

    public function sayWorld()
    {
        echo 'World';
    }
}

class MyHelloWorld2
{
    use Hello,
        World;

    public function sayExclamationMark()
    {
        echo '!';
    }
}

$o = new MyHelloWorld2();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();

// Hello World!