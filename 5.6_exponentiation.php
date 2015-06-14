<?php
//http://php.net/manual/en/migration56.new-features.php#migration56.new-features.exponentiation

printf("2 ** 3 ==      %d\n", 2 ** 3);
printf("2 ** 3 ** 2 == %d\n", 2 ** 3 ** 2);

$a = 2;
$a **= 3;
printf("a ==           %d\n", $a);

// 2 ** 3 ==      8
// 2 ** 3 ** 2 == 512
// a ==           8