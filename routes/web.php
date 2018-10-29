<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Timeline
Route::get('/timelineGroups','TimelineController@indexGroup');
Route::get('/timelineItems','TimelineController@indexItem');
Route::get('/timelineGroupCreate','TimelineController@createGroup');
Route::get('/timelineItemCreate','TimelineController@createItem');
Route::post('/timelineGroupStore','TimelineController@storeGroup');
Route::post('/timelineItemStore','TimelineController@storeItem');
Route::get('/allGroups','TimelineController@allGroups');
Route::get('/allItems','TimelineController@allItems');
