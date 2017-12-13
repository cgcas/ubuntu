<?php

//Route::get('mipaquete/main', 'Carlos\MiPaquete\Controllers\MainController@index');
Route::get('mipaquete/main', function () {
    return 'hola mundo';
});