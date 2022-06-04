<?php
// 4. * Простые делители числа 13195 — 5, 7, 13 и 29. Каков самый большой делитель числа
// 600851475143, являющийся простым числом?

$number = 13195;

function is_prime($n)
{
    $flag = true;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) {
            $flag = false;
            break;
        }
    }

    return $flag;
}

function division($number)
{
    $answer = [];
    $i = $number;

    while ($i > 0) {
        if ($number % $i === 0 && is_prime($i) && $i !== 1) {
            $answer[] = $i;
        }
        $i--;
    }

    print_r($answer);
    echo '<br>';
}

$start = microtime(true);

division($number);

echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';
echo '<hr>';
function customFunct(int $param, int $mod): int
{
    return (($param * $param + 1) % $mod);
}

function GCD(int $x, int $y): int
{
    if ($x == 0)
        return $y;
    if ($y == 0)
        return $x;
    $x = $x % $y;
    return GCD($y, $x);
}

function PollardRho(int $number): int
{
    $a = 2;
    $b = 2;
    $tmp = null;

    while (true) {
        $a = customFunct($a, $number);
        $b = customFunct(customFunct($b, $number), $number);
        $tmp = GCD(abs($b - $a), $number);
        if ($tmp > 1)
            break;
    }
    return $tmp;
}

function division_2_0($number)
{
    $m = null;
    $n = $number;
    $count = 1;

    while (true) {
        $m = PollardRho($n);
        echo "Мн. ${count}: " . $m . '<br>';
        $n = $n / $m;
        $count++;
        if ($n === 1) break;
    }
}

$start = microtime(true);

division_2_0($number);

echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';
echo '<hr>';
