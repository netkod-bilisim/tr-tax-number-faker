<?php

function trTaxNumberFaker(): string
{
    $digits = [];
    for ($i = 0; $i < 9; $i++) {
        $digits[$i] = rand(0, 9);
    }

    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $tmp = ($digits[$i] + 10 - ($i + 1)) % 10;
        $sum = ($tmp == 9 ? $sum + $tmp : $sum + (($tmp * (pow(2, 10 - ($i + 1)))) % 9));
    }
    $digits[9] = (10 - ($sum % 10)) % 10;

    return implode($digits);
}
