<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('pdf/image', function()
{
    $html = '<html><body>'
            . '<p>Laravel is beautiful !</p>'
            . '<img src="'.asset('Logo-Laravel.png').'" alt="" />'
            . '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->show();
});