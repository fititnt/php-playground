<?php

// http://php.net/manual/en/migration56.new-features.php#migration56.new-features.const-scalar-exprs
const ONE = 1;
const TWO = ONE * 2;

class C {
    const THREE = TWO + 1;
    const ONE_THIRD = ONE / self::THREE;
    const SENTENCE = 'The value of THREE is '.self::THREE;

    public function f($a = ONE + self::THREE) {
        return $a;
    }
}

echo (new C)->f()."\n"; // 4
echo C::SENTENCE; // The value of THREE is 3

const ARR = ['a', 'b']; // Arrays podem ser constantes
echo PHP_EOL;

echo ARR[0]; // 'a'



