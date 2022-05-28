<?php

function getPrimeNumbers($num, $index)
{
    $result = null;
    $count = 0;

    $i = 2;
    while ($i <= $num) {
        $j = 2;
        while ($j < $i) {
            if ($i % $j == 0) {
                break;
            }
            $j++;
        }
        if ($j == $i) {
            $result = $i;
            $count++;
            if ($count === $index) {
                break;
            }
        }
        $i++;
    }

    return $result;
}
