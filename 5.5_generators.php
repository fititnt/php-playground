<?php

//        Because generators compute their yielded values only on demand, they are useful 
//        for representing sequences that would be expensive or impossible to compute at once. 
//        These include e.g. infinite sequences and live data streams.


// http://php.net/manual/en/language.generators.overview.php

function xrange($start, $limit, $step = 1)
{
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}
/*
 * Note that both range() and xrange() result in the same
 * output below.
 */

echo 'Single digit odd numbers from range():  ';
foreach (range(1, 9, 2) as $number) {
    echo "$number ";
}
echo "\n";

echo 'Single digit odd numbers from xrange(): ';
foreach (xrange(1, 9, 2) as $number) {
    echo "$number ";
}

echo PHP_EOL . '-----------------------------------' . PHP_EOL;

function getFibonacci($first, $second, $total)
{
    yield $first;
    yield $second;
    for ($i = 1, $total -= 2; $i <= $total; $i++) {
        $sum = $first + $second;
        $first = $second;
        $second = $sum;
        yield $sum;
    }
}
// Generate first 10 numbers of the Fibonacci sequence starting from 0, 1
foreach (getFibonacci(0, 1, 10) as $fibonacci) {
    // 0 1 1 2 3 5 8 13 21 34
    echo $fibonacci . " ";
}
