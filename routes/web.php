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

Route::get('/', 'PortalController@index')->name('homepage');
Route::get('/{city_slug}', 'PortalController@city')->name('city');
Route::get('/competence/{job_slug}', 'PortalController@job')->name('job');
Route::get('/with/{user_slug}', 'MemberController@profile')->name('member.profile');
