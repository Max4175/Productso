<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Max4175\productso\Http\Controllers'], function () 
{
     Route::get('category/{slug?}','PrsoCategoryController@show');
});