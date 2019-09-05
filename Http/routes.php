<?php

    Route::group([
    'middleware' => ['web','adminmenu'], 
    'prefix' => 'spereport', 
    'namespace' => 'Modules\SpeReport\Http\Controllers'], function(){
    Route::get('/', 'SpeReportController@index');
    Route::get('/detail-items', 'SpeReportController@detailitems');
});