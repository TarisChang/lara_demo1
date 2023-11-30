<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['global'])->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('/about', [FrontController::class, 'about'])->name('about'); //關於我們
    Route::get('/history', [FrontController::class, 'history'])->name('history'); //發展歷史
    Route::get('/culture', [FrontController::class, 'culture'])->name('culture'); //企業文化
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact'); //聯絡我們
    Route::get('/case', [FrontController::class, 'case'])->name('case'); //工程案例
    Route::get('/news', [FrontController::class, 'news'])->name('news'); //最新消息
    Route::get('/news/{title}', [FrontController::class, 'newsDetail'])->name('news.detail');
    Route::get('/product', [FrontController::class, 'product'])->name('product'); //商品
    Route::get('/product/{name}', [FrontController::class, 'productDetail'])->name('product.detail'); //商品
    Route::get('/join-us', [FrontController::class, 'join'])->name('join'); //加入我們
});

// Route::fallback(function () {
//     return redirect()->route('home');
// });