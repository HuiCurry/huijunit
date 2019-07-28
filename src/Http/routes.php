<?php
/**
 * Created by PhpStorm.
 * User: yyh
 * Date: 2019/7/24
 * Time: 22:31
 */
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');