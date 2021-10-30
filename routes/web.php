<?php

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

//Route
Route::get('tentang', function (){
    return "<h1>Hello</h1>"
    . "selamat datang di webapp  saya"; 
});


route::get('saya', function(){
    //me return string
    // di folder resource/view
    $mamat = "mamat abdullah";
    return view('profile', compact('mamat'));
});

route::get('rico', function(){
    //me return string
    // di folder resource/view
    $nama = "rico achmad febiawan";
    $kelas = "XII RPL 3";
    $alamat = "jln kopo permai 2";
    $sekolah = "SMK  ASSALAAM BANDUNG";
    $umur = "17 tahun";
    return view('rico', compact('nama','kelas', 'alamat','sekolah','umur'));
});



route::get('sultan', function(){
    //me return string
    // di folder resource/view
    $nama = "Sultan";
    $kelas = "XII RPL 3";
    $alamat = "kopo permai";
    $sekolah = "SMK  ASSALAAM BANDUNG";
    $umur = "17 tahun";
    return view('sultan', compact('nama','kelas', 'alamat','sekolah','umur'));
});


route::get('nurahman', function(){
    //me return string
    // di folder resource/view
    $nama = "nurahman";
    $kelas = "XII RPL 3";
    $alamat = "cilepus";
    $sekolah = "SMK  ASSALAAM BANDUNG";
    $umur = "17 tahun";
    return view('nurahman', compact('nama','kelas', 'alamat','sekolah','umur'));
});


route::get('azhar', function(){
    //me return string
    // di folder resource/view
    $nama = "azhar";
    $kelas = "XII RPL 3";
    $alamat = "rancamanyar regency";
    $sekolah = "SMK  ASSALAAM BANDUNG";
    $umur = "17 tahun";
    return view('azhar', compact('nama','kelas', 'alamat','sekolah','umur'));
});


route::get('syukur', function(){
    //me return string
    // di folder resource/view
    $nama = "syukur";
    $kelas = "XII RPL 3";
    $alamat = "sadang";
    $sekolah = "SMK  ASSALAAM BANDUNG";
    $umur = "17 tahun";
    return view('syukur', compact('nama','kelas', 'alamat','sekolah','umur'));
});


// Route Parameter
Route::get('posting/{id}', function($a){
    return "Halaman Posting ke - <b>$a</b>"; 
});

// Route::get('parameter/{nama}/{alamat}/{jk}/{tb}/{bb}', function($nama,$alamat,$jk,$tb,$bb){
//     return "nama : $nama <br>" . 
//            "alamat : $alamat <br>" . 
//            "jenis kelamin : $jk <br>" . 
//            "tinggi badan : $tb <br>" . 
//            "berat badan : $bb";
// });

Route::get('parameter/{nama}/{alamat}/{jk}/{tb}/{bb}', function($nama,$alamat,$jk,$tb,$bb){
    return  view('parameter', compact('nama','alamat','jk','tb','bb'));
});

//Route opsional
Route::get('opsional/{nama?}/{alamat?}/{jj?}/{tb?}/{bb?}', function (
  $a = null,
  $b = null, 
  $c = null,
  $d = null,
  $e = null  ){
      return view ('optional', compact ('a','b','c','d','e'));
  
    } );


    //mengakses data melalui model
    Route::get('testmodel', function(){
        $query = App\Models\post::all();
        return $query;
    });
    //mencari data berdasarkan id
    Route::get('testmodel/{id}', function($id){
        $query = App\Models\post::find($id);
        return $query;
    });
    //mencari data berdasarkan field 'title' yang sama dengan parameter 's' 
    Route::get('testmodel-cari/{search}', function($s){
        $query = App\Models\post::where('title','like',"%$s%")->get();
        return $query;
    });
    //mengubah judul dari data ke 2 berdasarkan 'id' 
    Route::get('testmodel-update', function(){
        $query = App\Models\post::find(2);
        $query->title  = "bane si bajak laut";
        $query->save();
        return $query;
    });
    //menambah data baru
    Route::get('testmodel-add', function(){
        $query = new App\Models\post();
        $query->title  = "sholawat penghapus dosa";
        $query->content = "lorem ipsum sit amet dolor";
        $query->save();
        return $query;
    });
  //menghapus data 
  Route::get('testmodel-delete/{id}', function($id){
    $query = App\Models\post::find($id);
    $query->delete();
    return redirect('/testmodel');
});


Route::get('barang', function(){
    $query = App\Models\barang::all();
    return $query;
});

Route::get('pesanan', function(){
    $query = App\Models\pesanan::all();
    return $query;
});
Route::get('pembelian', function(){
    $query = App\Models\pembelian::all();
    return $query;
});
Route::get('pembeli', function(){
    $query = App\Models\pembeli::all();
    return $query;
});
Route::get('suplier', function(){
    $query = App\Models\suplier::all();
    return $query;
});





