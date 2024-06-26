<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merk;
use App\Models\Produk2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/home', function () {
    return view ('biodata1');
});

Route ::get('/about', function () {
    $nama = "Rafly";
    $jk = "Laki-Laki";
    $alamat = "Rancamanyar";
    $pendidikan = "SMK";
    $pekerjaan = "Pelajar";
    return view ('biodata2', compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

// parameter 
Route ::get('/about2/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama, $jk, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view ('param', compact ('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});

Route ::get('/kontak',function () {
    return view ('biodata3');
});


Route::get('/post', function () {
   //menampilkan semua data 
    $posts = Post::find(3);

    return $posts;
    //return view('tampil_post', compact('posts'));

});

Route::get('/produk', function () {

    $produks = Produk::all();

    return view('tampil_produk', compact('produks'));
});

Route::get('/pengguna', function () {
    $penggunas = Pengguna::all();

    return view('tampil_pengguna', compact('penggunas'));
});

Route::get('/telepon', function () {
    $telepons = Telepon::all();

    return view('tampil_telepon', compact('telepons'));;
});

Route::get('/merk', function () {
    $merks = Merk::all();

    return view('tampil_merks', compact('merks'));
});

Route::get('produk2', function () {
    $produks = Produk2::all();

    return view('tampil_produks2', compact('produks'));
});