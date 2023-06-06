<?php
use Illuminate\Support\Str;
    // function checkString()
    // {
    //     $prefix = 'hello';
    //     $string = 'hello world';

    //     if (Str::startsWith($string, $prefix)) {
    //         echo 'The string starts with the prefix.';
    //     } else {
    //         echo 'The string does not start with the prefix.';
    //     }
    // }

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d')
    {
        return \Illuminate\Support\Carbon::parse($date)->format($format);
    }
}

echo "hello";