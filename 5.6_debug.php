<?php

// http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo

class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));
// object(C)#1 (1) {
//   ["propSquared"]=>
//   int(1764)
// }
