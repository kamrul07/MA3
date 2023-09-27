<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function testEven($number) {
    if ($number % 2 != 0) {
        return true;
    }
}

function removeEven(array $numbers, callable $condition) {
    print_r(array_filter($numbers, $condition));
}

removeEven($numbers, "testEven");
