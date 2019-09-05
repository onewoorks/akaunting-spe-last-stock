<?php

Route::group(['middleware' => 'web', 'prefix' => 'spereport', 'namespace' => 'Modules\SpeReport\Http\Controllers'], function()
{
    Route::get('/', 'SpeReportController@index');
});
