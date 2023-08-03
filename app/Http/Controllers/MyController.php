<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MyController extends Controller
{
    //
    public function myMethod()
    {
        $prefix = 'hello';
        $string = 'hello world';

        if (Str::startsWith($string, $prefix)) {
            echo 'The string starts with the prefix.';
        } else {
            echo 'The string does not start with the prefix.';
        }
    }
    // public function myMethod()
    // {
    //     $array = ['apple', 'banana', 'orange'];
    //     $values = array_values($array);

    //     var_dump($values);
    // }
    
}
