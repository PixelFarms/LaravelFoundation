<?php

namespace PixelFarms\Kindle\Facades;

use Illuminate\Support\Facades\Facade;

class Kindle extends Facade {

    protected static function getFacadeAccessor() {
        return 'pixelfarms-kindle';
    }
}
