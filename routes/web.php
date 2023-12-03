<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ValidasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::prefix('jennyhouse')->group(function () {
    Route::middleware('auth')->group(function(){
        Route::resource('transaksi',TransaksiController::class);
        Route::get('/product',[BarangController::class,'viewProduct'])->name('product');
        Route::get('/logout',[ValidasiController::class,'logout'])->name('logout');
        Route::get('/product/{id}',[BarangController::class,'optionProduct'])->name('option.product');
        Route::get('/product/detail/{id}',[BarangController::class,'detailProduct'])->name('detail.product');
        Route::resource('profile',ProfileController::class);
        Route::get('/admin/product',[AdminController::class,'index_product'])->name('admin.product');
        Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
        Route::delete('/admin/delete',[AdminController::class,'delete'])->name('admin.delete');
        Route::get('admin/product/create',[AdminController::class,'create_product'])->name('admin.create.product');
        Route::get('admin/product/edit/{id}',[AdminController::class,'edit_product'])->name('admin.edit.product');
        Route::delete('admin/product/delete',[AdminController::class,'delete_product'])->name('admin.delete.product');
        Route::post('admin/product/create',[AdminController::class,'store_product'])->name('admin.store.product');
        Route::put('admin/product/update/{id}',[AdminController::class,'update_product'])->name('admin.update.product');
        Route::get('admin/log',[AdminController::class,'log'])->name('admin.log');
    });
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/login',[ValidasiController::class,'viewLogin'])->name('view.login');
    Route::get('/register',[ValidasiController::class,'viewRegister'])->name('view.register');
    
    Route::post('/login/validasi',[ValidasiController::class,'validasiLogin'])->name('validasi.login');
    Route::post('/register/validasi',[ValidasiController::class,'validasiRegister'])->name('validasi.register');
    
    
    
});


// Route::get('/test', function () {
//     try {
//         $conn = new \PDO("sqlsrv:Server=localhost\SQLEXPRESS;Database=jennyhouse", "sa", "sadam12345");
//         echo "Connected successfully to the database.";

//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//         // SQL untuk membuat tabel
//         $sql = "
//             CREATE TABLE tes (
//                 id INT PRIMARY KEY,
//                 nama_kolom NVARCHAR(255),
//                 deskripsi TEXT,
//                 created_at DATETIME,
//                 updated_at DATETIME
//             )
//         ";

//         // Jalankan pernyataan SQL
//         $conn->exec($sql);

//         echo "Tabel berhasil dibuat.";
//     } catch (\PDOException $e) {
//         die("Connection failed: " . $e->getMessage());
//     }

Route::redirect('/', 'jennyhouse');
