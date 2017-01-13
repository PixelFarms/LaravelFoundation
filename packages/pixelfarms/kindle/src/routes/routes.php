<?php

Route::get('demo', function() {
    return "this is a service provider";
});

Route::get('test', function() {
    return Kindle::display();
});

Route::get('add/{a}/{b}', 'PixelFarms\Kindle\KindleController@add');
Route::get('subtract/{a}/{b}', 'PixelFarms\Kindle\KindleController@subtract');
