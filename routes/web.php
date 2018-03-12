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
    return view('hello');
});

Route::get('locale', function () {
  return \App::getLocale();
});
// Put the selected locale to the session
Route::get('locale/{locale}', function ($locale) {
\Session::put('locale', $locale);
return redirect()->back();
});
