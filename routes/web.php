<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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

// Ejercicio 1

Route::get('/ejercicio1', function () {
    return "GET OK";
});

Route::post('/ejercicio1', function () {
    return "POST OK";
});


Route::post('/ejercicio2/a', function(Request $req){
    return $req;
});


Route::post('/ejercicio2/b', function(Request $req){
    $price=$req->get('price');
    $response=array();
    if($price<0){
        return Response::json([
            'message' => "Price can't be less than 0"
        ], 422); // Status code here
    }else{
        return $req;
    }
    
});


Route::post('/ejercicio2/c', function(Request $req){
    $discount='';
    $requestData = $req->all();
    if(null!==$req->get('discount')){

        $discount=$req->get('discount');
        if($discount=='SAVE10'){
            $requestData['price'] = ($requestData['price'] - ($requestData['price'] * 0.10));
            $requestData['discount'] = 10;
        }elseif($discount=='SAVE5'){
            $requestData['price'] = ($requestData['price'] - ($requestData['price'] * 0.05));
            $requestData['discount'] = 5;
        }elseif($discount=='SAVE15'){
            $requestData['price'] = ($requestData['price'] - ($requestData['price'] * 0.15));
            $requestData['discount'] = 15;
        }
    }
    $req->merge($requestData);
    return $req;
});