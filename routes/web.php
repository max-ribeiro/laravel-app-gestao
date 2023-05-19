<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'main'])->name('site.index');

Route::get('/about', [AboutController::class, 'show'])->name('site.about');

Route::get('/contact', [ContactController::class, 'show'])->name('site.contact');
Route::post('/contact', [ContactController::class, 'show'])->name('site.contact');

//app
Route::prefix('/app')->group(function() {
    Route::get('/login', function(){
        return 'login';
    })->name('app.login');
    Route::get('/customers', function() {
        return 'customers';
    })->name('app.customers');
    Route::get('/suppliers', function() {
        return 'suppliers';
    })->name('app.suppliers');
    Route::get('/products', function() {
        return 'products';
    })->name('app.products');
});

// Route::get('/contact/{name}/{category_id}', function(string $name, int $category_id = 1) {
//     echo "{$name} - {$category_id}";
// })->where('category_id', '[0-9]+')->where('name', '[a-zA-Z]+');
