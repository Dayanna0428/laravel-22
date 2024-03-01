<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\operacionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CustomerController;


/*
|---------------use Illuminate\Support\Facades\Route;-----------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  //http://localhost/laravel1/
    return view('welcome');
});


Route::get('pepe/{dato}', [operacionController::class,'NPrimo']); //http://localhost/laravel1/public/pepe/5
Route::get('lulu/{dato1}/{dato2}', [operacionController::class,'Amigos']); //http://localhost/laravel1/public/lulu/78/96
//formulario con views
Route::get('calcular', [operacionController::class,'create']); // ver formulario
Route::post('calcular',[operacionController::class,'store'])->name('for.store'); //metodo POST envia datos del formulario al servidor
//http://localhost/laravel1/public/calcular 

Route::get('/producto',[ProductController::class,'create']); //http://localhost/laravel1/public/producto
Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');

Route::get('/st',[StoreController::class,'create']); 
Route::post('/creado',[StoreController::class,'store'])->name('storemall.store');


Route::get('/customer',[CustomerController::class,'create1']); 
Route::post('/creado',[CustomerController::class,'store'])->name('customer.store');