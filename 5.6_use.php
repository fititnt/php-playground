<?php
// http://php.net/manual/en/migration56.new-features.php#migration56.new-features.use

//  The use operator has been extended to support importing functions and constants in addition to classes. 
// This is achieved via the use function and use const constructs, respectively.

namespace Name\Space {
    const FOO = 42;
    function f() { echo __FUNCTION__."\n"; }
}

namespace {
    use const Name\Space\FOO;
    use function Name\Space\f;

    echo FOO."\n";
    f();
}

//42
//Name\Space\f