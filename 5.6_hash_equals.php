<?php
// http://php.net/manual/en/function.hash-equals.php

// A Lesson In Timing Attacks (or, Don’t use MessageDigest.isEquals)
// http://codahale.com/a-lesson-in-timing-attacks/

$expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrect = crypt('apple',  '$2a$07$usesomesillystringforsalt$');

var_dump(hash_equals($expected, $correct));
var_dump(hash_equals($expected, $incorrect));
?>