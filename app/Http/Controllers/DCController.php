<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DCController extends Controller
{
    public function index()
    {
        $current_date_time = date('Y-m-d H:i:s');
        echo $current_date_time, "<br>";
        $current_date = Carbon::now()->format('Y-m-d');
        echo $current_date, "<br>";
        $current_time = Carbon::now()->format('H:i:s');
        echo $current_time;



        $current_date = Carbon::now();
        $future_date = $current_date->addDays(31)->format('Y-m-d');
        echo $future_date, "<br>";



        $current_date = Carbon::now();
        $past_date = $current_date->subDays(21)->format('Y-m-d');
        echo $past_date, "<br>";



        $date = Carbon::parse('2015-12-19 10:10:16');
        $time = $date->format('H:i:s');
        echo $time, "<br>";




        $datetime = Carbon::parse('2015-12-19 10:10:16');
        $date = $datetime->format('Y-m-d');
        echo $date, "<br>";



        $now = Carbon::now('Europe/London')->format('H:i:s');
        echo $now, "<br>";



        $now = Carbon::now('US/arizona')->format('H:i:s');
        echo $now, "<br>";



        $date1 = Carbon::create(2023, 5, 1, 12, 0, 0);
        $date2 = Carbon::now();

        $diffInDays = $date1->diffInDays($date2);
        $diffInHours = $date1->diffInHours($date2) % 24;

        echo "Difference in days: " . $diffInDays . "\n";
        echo "Difference in hours: " . $diffInHours . "\n", "<br>";



        $date_string = '2018-3-5 12:14:50';
        $date = Carbon::createFromFormat('Y-n-j H:i:s', $date_string);
        $timestamp = $date->getTimestamp();
        echo $timestamp, "<br>";



        $year = 2000;
        $month = 4;
        $day = 19;
        $hour = 20;
        $minute = 30;
        $second = 15;
        $tz = 'America/Toronto';
        echo Carbon::createFromDate($year, $month, $day, $tz) . "\n<br>";
        echo Carbon::createFromTime($hour, $minute, $second, $tz) . "\n<br>";
        echo Carbon::create($year, $month, $day, $hour, $minute, $second, $tz) . "\n", "<br>";



        $timezone = 'America/Toronto';
        $now = Carbon::now($timezone);

        $firstDay = $now->subMonth()->startOfMonth();
        $lastDay = $now->copy()->endOfMonth();

        echo "First day of previous month: " . $firstDay->toDateString() . "\n";
        echo "Last day of previous month: " . $lastDay->toDateString() . "\n";



        $timezone = 'America/Toronto';
        $now = Carbon::now($timezone);

        $first_day_of_month = $now->firstOfMonth();
        echo "First day of previous month: " . $first_day_of_month->toDateString() . "\n";

        $last_day_of_month = $now->endOfMonth();
        echo "Last day of current month: " . $last_day_of_month->toDateString() . "\n", "<br>";


        $year = 2022;
        $month = 3;

        $daysInMonth = Carbon::create($year, $month)->daysInMonth;

        echo "Number of days in March $year: $daysInMonth", "<br>";


        $timezone = 'America/Toronto';
        $now = Carbon::now($timezone);

        $current_month = $now->format('F');
        $current_year = $now->format('Y');

        echo "Current month: " . $current_month . "\n";
        echo "Current year: " . $current_year . "\n", "<br>";
    }
}
