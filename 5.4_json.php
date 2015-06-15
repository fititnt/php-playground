<?php

// http://php.net/manual/en/book.json.php


// Novo no PHP 5.4
//JSON_PRETTY_PRINT
//JSON_UNESCAPED_SLASHES
//JSON_NUMERIC_CHECK
//JSON_UNESCAPED_UNICODE
//JSON_BIGINT_AS_STRING

$text = [
    123 => 456,
    "São João" => "25/01/1986",
    "\\a\\b\a" => null
];

echo json_encode($text, JSON_PRETTY_PRINT);

//{
//    "123": 456,
//    "S\u00e3o Jo\u00e3o": "25\/01\/1986",
//    "\\a\\b\\a": null
//}


echo PHP_EOL . '-----------------------------------' . PHP_EOL;

echo json_encode($text, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

//{
//    "123": 456,
//    "S\u00e3o Jo\u00e3o": "25/01/1986",
//    "\\a\\b\\a": null
//}

echo PHP_EOL . '-----------------------------------' . PHP_EOL;

echo json_encode($text, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

//{
//    "123": 456,
//    "São João": "25/01/1986",
//    "\\a\\b\\a": null
//}

// http://php.net/manual/en/jsonserializable.jsonserialize.php
// JsonSerializable::jsonSerialize — Specify data which should be serialized to JSON


echo PHP_EOL . '-----------------------------------' . PHP_EOL;
date_default_timezone_set('America/Los_Angeles');

class Fruit implements JsonSerializable {
    public
        $type = 'Apple',
        $lastEaten = null;

    public function __construct() {
        $this->lastEaten = new DateTime();
    }

    public function jsonSerialize() {
        return [
            'type' => $this->type,
            'lastEaten' => $this->lastEaten->format(DateTime::ISO8601)
        ];
    }
}
echo json_encode(new Fruit()); // {"type":"Apple","lastEaten":"2015-06-14T02:29:39-0700"}