<?php

/**
 * credits: https://github.com/nurmuhammet-ali/laravel-helpers/blob/main/src/helpers.php
 *
 */
if (! function_exists('randomHex')) {
    /**
     * Generate random hex color
     * 
     * Exmaple:
     * randomHex() -> # #FDA01E
     * 
     * @return string
     */
    function randomHex(): string
    {
       $chars = 'ABCDEF0123456789';
       $color = '#';
       for ( $i = 0; $i < 6; $i++ ) {
          $color .= $chars[rand(0, strlen($chars) - 1)];
       }
       
       return $color;
    }
}

if (! function_exists('number_is_between')) {
    /**
     * Check if number is between range
     * 
     * Exmaple:
     * number_is_between(61929248, 61000000, 65999999) -> true
     * 
     * @return bool
     */
    function number_is_between(int $number, int $min, int $max): bool
    {
        return ($min <= $number) && ($number <= $max);
    }
}

if (! function_exists('round_up')) {
    /**
     * Rounds number up
     * 
     * round_up(2) -> 2.0
     * round_up(2.3) -> 2.3
     * round_up(2.33) -> 2.4
     * round_up(2.335) -> 2.4
     * round_up(2.335, 2) -> 2.4
     * round_up(2.335, 4) -> 2.335
     * round_up(2.335, 3) -> 2.34
     * 
     * @param int|float $number
     * @param int $precision
     *
     * @return float
     */
    function round_up(int|float $number, int $precision = 2): float
    {
        $fig = (int) str_pad('1', $precision, '0');
        return (ceil($number * $fig) / $fig);
    }
}
