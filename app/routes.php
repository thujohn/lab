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
    $html = View::make('pdf.image');
    return PDF::load($html, 'A4', 'portrait')->download();
});

Route::get('pdf/utf8', function()
{
    $html = View::make('pdf.utf8');
    return PDF::load($html, 'A4', 'portrait')->show();
});

Route::get('pdf/css', function()
{
    $html = View::make('pdf.css');
    return PDF::load($html, 'A4', 'portrait')->download();
});

Route::get('pdf/multi', function()
{
	for ($i=1;$i<=2;$i++)
	{
		$pdf = new \Thujohn\Pdf\Pdf();
		$content = $pdf->load(View::make('pdf.image'))->output();
		File::put(public_path('test'.$i.'.pdf'), $content);
	}
	PDF::clear();
});