<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
Route::get('/login', function () {
    return view('login');
});

Route::post('/login/auth', function (Request $request) {
    $users = DB::table ('user')
        ->where('email', '=', $request->email)
        ->where('pasword', '=', $request->password)
        ->get();
    if(count($users)>0) {
        return redirect("/home");
    }
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/register_berhasil', function () {
    return view('register_berhasil');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});


Route::get('/konfirmasi_pesananberhasil', function () {
    return view('konfirmasi_pesananberhasil');
});

Route::get('/detail_reservasi', function () {
    return view('detail_reservasi');
});


Route::get('/detail_servis', function () {
    return view('detail_servis');
});

Route::get('/konfirmasi_pembayaran', function () {
    return view('konfirmasi_pembayaran');
});

Route::get('/konfirmasi_pesanan', function () {
    return view('konfirmasi_pesanan');
});

Route::get('/inputdataservis', function () {
    return view('input data servis');
});

Route::get('/data_servis', function () {
    return view('data_servis');
});

Route::get('/riwayat_transaksi', function () {
    return view('riwayat_transaksi');
});


