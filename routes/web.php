<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//index
Route::get('/',[ProductController::class,'index']);
//create (show add form)
Route::get('/products/create',[ProductController::class,'create']);

//store (add new record into the database)
Route::post('/products',[ProductController::class,'store']);

//show
Route::get('/products/{product}',[ProductController::class,'show']);

//edit a product (form)
Route::get('/products/{product}/edit',[ProductController::class,'edit']);

//update a product (save the new data)
Route::put('/products/{product}',[ProductController::class,'update']);

//delete a product
Route::delete('/products/{product}',[ProductController::class,'destroy']);
