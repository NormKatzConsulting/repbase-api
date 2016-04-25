<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{name}', function ($name) {
    return "welcome $name";
    //return view('welcome');
});
Route::get('customer/{id}', function ($id) {
    return App\Customer::find($id);
});
Route::get('customers', function () {
    return App\Customer::all();
});
Route::get('manufacturer/{id}', function ($id) {
    return App\Manufacturer::find($id);
});
Route::get('manufacturers', function () {
    return App\Manufacturer::all();
});
Route::get('purchaseOrder/{id}', function ($id) {
    return App\PurchaseOrder::find($id);
});
Route::get('purchaseOrders', function () {
    return App\PurchaseOrder::forPage(1,100)->get();
});
Route::get('purchaseOrders/{page}/{count}', function ($page=1, $count=100) {
    return App\PurchaseOrder::forPage($page, $count)->get();
});
Route::get('rep/{id}', function ($id) {
    return App\Rep::find($id);
});
Route::get('reps', function () {
    return App\Rep::all();
});
Route::get('commission/{id}', function ($id) {
    return App\Commission::find($id);
});
Route::get('commissions', function () {
    return App\Commission::all();
});

Route::get('test', function () {

    return '<form method="POST" action="test">' . csrf_field() . '<input type="submit"></form>';
    //return view('welcome');
});
Route::post('test', function () {
    echo "POST";
});

Route::group(['middleware' => ['web']], function () {
    //
});
