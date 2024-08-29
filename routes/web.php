<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    HelloWorldController::class, 'All_product']);

Route::get('/addProduct', function (){
    return view('addProduct');
});

Route::post(
    '/addProduct/store', [HelloWorldController::class, 'store_Product']
);

Route::get (
    '/editProduct/{id}', [HelloWorldController::class, 'get_product_by_id']
)->name('editProduct');

Route::patch('/editProduct/update/{id}', [HelloWorldController::class, 'update_product']
)->name('updateProduct');

Route::get (
    '/deleteProduct/{id}', [HelloWorldController::class, 'delete_product']
);