<?php

namespace Zhenge\Kdniao\Facades;

use Illuminate\Support\Facades\Facade;

class Kdniao extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'kdniao';
    }
}