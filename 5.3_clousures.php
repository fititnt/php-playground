<?php

// http://php.net/manual/en/functions.anonymous.php


echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');
// outputs helloWorld

echo PHP_EOL . '-----------------------------------' . PHP_EOL;
// por orls

$result = 0;

$one = function() {
    var_dump($result);
};

$two = function() use ($result) {
    var_dump($result);
};

$three = function() use (&$result) {
    var_dump($result);
};

$result++;


$one();
$two();
$three();

//PHP Notice:  Undefined variable: result in /alligo/code/fititnt/php-playground/5.3_clousures.php on line 17
//NULL
//int(0)
//int(1)
