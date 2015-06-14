<?php

// http://php.net/manual/en/migration56.new-features.php#migration56.new-features.gmp

$a = gmp_init(42);
$b = gmp_init(17);

// Pre-5.6 code:
var_dump(gmp_add($a, $b));
var_dump(gmp_add($a, 17));
var_dump(gmp_add(42, $b));

// New code:
var_dump($a + $b);
var_dump($a + 17);
var_dump(42 + $b);

//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
//    object(GMP)#3 (1) {
//      ["num"]=>
//      string(2) "59"
//    }
