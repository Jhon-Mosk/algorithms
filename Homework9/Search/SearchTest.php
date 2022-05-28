<?php

include './Homework9/ArrayFunc/randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

$arr = getSortRandArray(ARRAY_SIZE);

//print_r($arr);
echo "Линейный поиск" . PHP_EOL;
$start = microtime(true);
echo linearSearch($arr, SEARCH_VALUE) . PHP_EOL;
echo "Линейный поиск: " . (microtime(true) - $start) . PHP_EOL;

echo "Бинарный поиск" . PHP_EOL;
$start = microtime(true);
echo binarySearch($arr, SEARCH_VALUE) . PHP_EOL;
echo "Бинарный поиск: " . (microtime(true) - $start) . PHP_EOL;

echo "Интерполяционный" . PHP_EOL;
$start = microtime(true);
echo interpolationSearch($arr, SEARCH_VALUE);
echo "Интерполяционный поиск: " . (microtime(true) - $start) . PHP_EOL;
