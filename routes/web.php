<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/detail_unit/{unit}', [IndexController::class, 'detail_unit'])->name('detail_unit');
Route::get('/galleries', [IndexController::class, 'galleries'])->name('galleries');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/karir', [IndexController::class, 'karir'])->name('karir');
Route::get('/menu/{slug}', [IndexController::class, 'menu'])->name('menu');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('/admin/setting/{user}', [SettingController::class, 'update'])->name('setting.update');
    Route::resources([
        '/admin/slider' => SliderController::class,
        '/admin/unit' => UnitController::class,
        '/admin/partner' => PartnerController::class,
        '/admin/about' => AboutController::class,
        '/admin/gallery' => GalleryController::class,
        '/admin/carrier' => CarrierController::class,
        '/admin/image' => ImageController::class,
        '/admin/menu' => MenuController::class,
    ]);
});

require __DIR__ . '/auth.php';
