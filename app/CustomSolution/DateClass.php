<?php

namespace App\CustomSolution;
use Carbon\carbon;

class DateClass{
    public static function dateformatYMD($date){
        return Carbon::createFromFormat('m/d/Y',$date)->format('Y-m-d');
    }
}