<?php

use Illuminate\Http\Request;

Route::post('storePhoto', 'PhotosController@store');

Route::any('{path?}', 'MainController@index')->where("path", ".+");
