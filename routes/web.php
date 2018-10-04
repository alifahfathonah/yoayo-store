<?php
/**
 * --------------------------------------------------------------------------
 * ROUTE HALAMAN PENGGUNA
 * --------------------------------------------------------------------------
 *
 */

/** Halaman Beranda Utama */

Route::get('/', 'Pengguna\BerandaController@index')->name('beranda');



/** Halaman Autentikasi Pengguna */

# METHOD GET
Route::group(['middleware' => 'guest'], function() {
    Route::get('login', 'Pengguna\Autentikasi\LoginController@index')->name('login');
    Route::get('register', 'Pengguna\Autentikasi\RegisterController@index')->name('register');
});
Route::get('logout', 'Pengguna\Autentikasi\LoginController@logout')->name('logout');

# METHOD POST
Route::post('login', 'Pengguna\Autentikasi\LoginController@login')->name('proses_login');
Route::post('register', 'Pengguna\Autentikasi\RegisterController@register')->name('proses_regis');



/** Halaman Akun Pengguna */

# METHOD GET
Route::get('akun/{nama_pengguna}', 'Pengguna\Akun\AkunController@index')->name('akun_pengguna');



/** Halaman Keranjang & Checkout */

# METHOD GET
Route::group(['middleware' => 'loginValid'], function() {
    Route::get('keranjang', 'Pengguna\Keranjang\KeranjangController@index')->name('keranjang');
});

Route::group(['prefix' => 'api/v1'], function(){
    Route::get('provinsi', 'Pengguna\Keranjang\KeranjangController@get_provinsi');
});



/** Halaman Produk*/

# METHOD GET
Route::group(['prefix'=> 'produk', 'middleware' => 'loginValid'], function() {
    Route::get('detail', 'Pengguna\Produk\ProdukController@detail_produk')->name('detail_produk');
});



/**
 * --------------------------------------------------------------------------
 * ROUTE HALAMAN ADMIN
 * --------------------------------------------------------------------------
 *
 */
Route::group(['prefix' => 'admin'], function(){

    /** Halaman Beranda Utama */

    # METHOD GET
    Route::get('/', 'Admin\BerandaController@index')->name('beranda_admin');
    Route::get('sidebar_counter', 'Admin\BerandaController@sidebar_counter'); // AJAX



    /** Halaman Beranda Utama */

    # METHOD GET
    Route::get('profile/{id_admin}', 'Admin\ProfileController@index')->name('profile_admin');

    # METHOD PUT
    Route::put('profile/ganti_password/{id_admin}', 'Admin\ProfileController@ganti_password')->name('ganti_password_admin');



    /** Halaman Autentikasi */

    # METHOD GET
    Route::get('login', 'Admin\Autentikasi\LoginController@index')->name('login_admin');
    Route::get('logout', 'Admin\Autentikasi\LoginController@logout')->name('logout_admin');

    # METHOD POST
    Route::post('login', 'Admin\Autentikasi\LoginController@login')->name('proses_login_admin');



    /** Halaman Produk */

    # METHOD GET
    Route::get('produk', 'Admin\Produk\ProdukController@index')->name('list_produk');
    Route::get('get_produk', 'Admin\Produk\ProdukController@get_barang'); // AJAX

    # METHOD POST
    Route::post('produk', 'Admin\Produk\ProdukController@tambah_produk')->name('tambah_produk');

    # METHOD PUT
    Route::put('edit_produk/{id_barang}', 'Admin\Produk\ProdukController@edit_produk');

    # METHOD DELETE
    Route::delete('hapus_produk/{id_barang}', 'Admin\Produk\ProdukController@hapus_produk');



    /** Halaman Kategori */

    # METHOD GET
    Route::get('kategori', 'Admin\Produk\KategoriController@index')->name('kategori_produk');
    Route::get('check_kategori', 'Admin\Produk\KategoriController@check_kategori'); // AJAX

    # METHOD POST
    Route::post('kategori', 'Admin\Produk\KategoriController@tambah_kategori')->name('tambah_kategori');

    # METHOD PUT
    Route::put('edit_kategori/{id_kategori}', 'Admin\Produk\KategoriController@edit_kategori');

    # METHOD DELETE
    Route::delete('hapus_kategori/{id_kategori}', 'Admin\Produk\KategoriController@hapus_kategori');



    /** Halaman Merk */

    # METHOD GET
    Route::get('merk', 'Admin\Produk\MerkController@index')->name('merk_produk');
    Route::get('check_merk', 'Admin\Produk\MerkController@check_merk'); // AJAX

    # METHOD POST
    Route::post('tambah_merk', 'Admin\Produk\MerkController@tambah_merk')->name('tambah_merk');

    # METHOD PUT
    Route::put('edit_merk/{id_merk}', 'Admin\Produk\MerkController@edit_merk');

    # METHOD DELETE
    Route::delete('hapus_merk/{id_merk}', 'Admin\Produk\MerkController@hapus_merk');



    /** Halaman Superadmin : Admin */

    # METHOD GET
    Route::get('superadmin/admin', 'Admin\Superadmin\AdminController@index')->name('superadmin_admin');
    Route::get('superadmin/blokir_admin/{id_admin}', 'Admin\Superadmin\AdminController@blokir_admin')->name('blokir');
    Route::get('superadmin/get_admin/{id_admin}', 'Admin\Superadmin\AdminController@get_admin'); // AJAX

    # METHOD POST
    Route::post('superadmin/tambah_admin', 'Admin\Superadmin\AdminController@tambah_admin')->name('tambah_admin');

    # METHOD PUT
    Route::put('superadmin/edit_admin/}id_admin}', 'Admin\Superadmin\AdminController@edit_admin');
    Route::put('superadmin/ubah_status_admin/{id_admin}', 'Admin\Superadmin\AdminController@ubah_status_admin');

    # METHOD DELETE
    Route::delete('superadmin/hapus_admin/{id_admin}', 'Admin\Superadmin\AdminController@hapus_admin');



});


/**
 * --------------------------------------------------------------------------
 * Testing Unit Route
 * --------------------------------------------------------------------------
 *
 */

 # METHOD GET
Route::get('test', 'Test\TestingController@index');
Route::get('test/ajax', function(){
    return view('test');
});
# METHOD POST
Route::post('test', 'Test\TestingController@test')->name('test_form');
Route::post('/send', 'Email\EmailController@send');