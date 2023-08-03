<?php
namespace App\CustomSolution;
USE Illuminate\Support\Facades\Facade;
class DateClassFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'dateclass';
    }
}