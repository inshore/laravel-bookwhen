<?php

namespace InShore\Bookwhen\Facades;

use Illuminate\Support\Facades\Facade;

class Bookwhen extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bookwhen';
    }
}
