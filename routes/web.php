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

// Route::get('/log', function () {
//     return view('dashboard.login');
// });

 
Route::get('/','DashboardController@dashboard')->name('dashboard');


// Product (User)
Route::get('/product/input','ProductUserController@inputproduct')->name('input.product');
Route::get('/product/data','ProductUserController@lihatproduct')->name('lihat.product');
Route::post('/product/tambah','ProductUserController@store')->name('product.store');
Route::get('/product/edit/{id}','ProductUserController@edit')->name('product.edit');
Route::put('/product/edit/{id}','ProductUserController@update')->name('product.update');
Route::get('/product/hapus/{id}','ProductUserController@destroy')->name('product.destroy');


// Pariwisata (User)
Route::get('/pariwisata/input','ProductUserController@inputpariwisata')->name('input.pariwisata');
Route::get('/pariwisata/data','ProductUserController@lihatpariwisata')->name('lihat.pariwisata');
Route::post('/pariwisata/tambah','ProductUserController@store_pariwisata')->name('pariwisata.store');
Route::get('/pariwisata/edit/{id}','ProductUserController@edit_pariwisata')->name('pariwisata.edit');
Route::put('/pariwisata/edit/{id}','ProductUserController@update_pariwisata')->name('pariwisata.update');
Route::get('/pariwisata/hapus/{id}','ProductUserController@destroy_pariwisata')->name('pariwisata.destroy');


// User (Admin)
Route::get('/user/indexuser','AdminController@indexuser')->name('index.user');
Route::get('/user/inputuser','AdminController@create')->name('create.user');
Route::post('/user/inputuser','AdminController@store')->name('store.user');
Route::get('/user/edituser/{id}','AdminController@edit')->name('edit.user');
Route::put('/user/edituser/{id}','AdminController@update')->name('update.user');
Route::delete('/user/deleteuser/{id}','AdminController@destroy')->name('destroy.user');
// Product (Admin)
Route::get('/product/lihat','AdminController@lihatproduct')->name('product.lihat');
Route::get('/product/delete/{id}','AdminController@destroy_product')->name('product.hapus');
// Contact (Admin)
Route::get('/contact/lihat','AdminController@lihatcontact')->name('lihat.contact');
Route::delete('/contact/hapus/{id}','AdminController@destroy_contact')->name('contact.destroy');
Route::get('/contact/detail/{id}','AdminController@detail')->name('contact.detail');
// contact(dashboard)
Route::get('/dashboard/contact','DashboardController@contact')->name('dashboard.contact');
Route::post('/contact/tambah','DashboardController@contact_store')->name('contact.store');
// Berita (Admin)
Route::get('/berita/input','AdminController@inputberita')->name('berita.input');
Route::post('/berita/tambah','AdminController@storeberita')->name('berita.store');
Route::get('/berita/lihat','AdminController@lihatberita')->name('lihat.berita');
Route::get('/berita/edit/{id}','AdminController@editberita')->name('berita.edit');
Route::put('/berita/edit/{id}','AdminController@updateberita')->name('berita.update');
Route::get('/berita/hapus/{id}','AdminController@destroyberita')->name('berita.destroy');
// Vismis (Admin)
Route::get('/input/vismis','AdminController@vismis')->name('input.vismis');
Route::get('/vismis/lihat','AdminController@lihatvismis')->name('lihat.vismis');
Route::post('/vismis/tambah','AdminController@inputvismis')->name('vismis.store');
Route::get('/vismis/edit/{id}','AdminController@editvismis')->name('vismis.edit');
Route::put('/vismis/edit/{id}','AdminController@updatevismis')->name('vismis.update');
Route::delete('/vismis/hapus/{id}','AdminController@destroy_vismis')->name('vismis.destroy');
// About (Admin)
Route::get('/input/about','AdminController@about')->name('input.about');
Route::post('/about/tambah','AdminController@inputabout')->name('about.store');
// User (User)
Route::get('/user/setting','ProductUserController@setting')->name('setting.user');
Route::get('/user/editsetting/{id}','ProductUserController@edit_setting')->name('edit.setting');
Route::put('/user/editsetting/{id}','ProductUserController@update_setting')->name('update.setting');
Route::delete('/user/deletesetting/{id}','ProductUserController@setting_destroy')->name('destroy.setting');




// dashboard
Route::get('/dashboard/shop','DashboardController@shop')->name('dashboard.shop');
Route::get('/dashboard/berita','DashboardController@berita')->name('dashboard.berita');
Route::get('/kategori/hasilhutan','DashboardController@catHasilHutan')->name('dashboard.hasilhutan');;
Route::get('/kategori/rumahtangga','DashboardController@catRumahTangga')->name('dashboard.rumahtangga');;
Route::get('/kategori/manufaktur','DashboardController@catManufaktur')->name('dashboard.manufaktur');;
Route::get('/kategori/pengeringanikan','DashboardController@catPengeringanIkan')->name('dashboard.pengeringanikan');;
Route::get('/kategori/pengolahanmakanan','DashboardController@catPengolahanMakanan')->name('dashboard.pengolahanmakanan');;
Route::get('/kategori/pertenunan','DashboardController@catPertenunan')->name('dashboard.pertenunan');;
Route::get('/kategori/pengolahanikan','DashboardController@catPengolahanIkan')->name('dashboard.pengolahanikan');;
Route::get('/kategori/perebusanikanteri','DashboardController@catPerebusanIkanTeri')->name('dashboard.perebusanikanteri');;
Route::get('/kategori/pengawetanikan','DashboardController@catPengawetanIkan')->name('dashboard.pengawetanikan');;
Route::get('/kategori/pengasapanikan','DashboardController@catPengasapanIkan')->name('dashboard.pengasapanikan');;
Route::get('/kategori/pembekuanikan','DashboardController@catPembekuanIkan')->name('dashboard.pembekuanikan');;
Route::get('/kategori/pakaianjadi','DashboardController@catPakaianJadi')->name('dashboard.pakaianjadi');;
Route::get('/kategori/kerajinan','DashboardController@catKerajinan')->name('dashboard.kerajinan');;
Route::get('/kategori/industriberbasislumatanbiotaair','DashboardController@catIndustriBerbasisLBA')->name('dashboard.industrilba');;
Route::get('/kategori/batik','DashboardController@catBatik')->name('dashboard.batik');;
Route::get('/kategori/logamdanelektronik','DashboardController@catLogamElektro')->name('dashboard.logamelektro');;
Route::get('/kategori/kerajinanumum','DashboardController@catKerajinanUmum')->name('dashboard.kerajinanumum');;
Route::get('/kategori/kimiadanbahanbangunan','DashboardController@catKimia')->name('dashboard.kimiabahanbangunan');;
Route::get('/kategori/pembuatanperahunelayan','DashboardController@catPerahu')->name('dashboard.perahunelayan');;
Route::get('/kategori/pabrikesbatubelah','DashboardController@catEsBatuBelah')->name('dashboard.esbatubelah');;
Route::get('/kategori/pabrikesantang','DashboardController@catEsAntang')->name('dashboard.esantang');;
Route::get('/kategori/ikanasin','DashboardController@catIkanAsin')->name('dashboard.ikanasin');;
Route::get('/kategori/minyakkelapa','DashboardController@catMinyakKelapa')->name('dashboard.minyakkelapan');;
Route::get('/kategori/kayu','DashboardController@catKayu')->name('dashboard.kayu');;

// dashboard detail shop
Route::get('/detail/shop/{id}','DashboardController@detail_shop')->name('detail.shop');
// dashboard Detail Berita
Route::get('/detail/berita/{id}','DashboardController@detail_berita')->name('detail.berita');
// search
Route::get('/search','DashboardController@search');
// visimisi
Route::get('/dashboard/visimisi','DashboardController@vismis')->name('vismis');
// about
Route::get('/dashboard/about','DashboardController@about')->name('about');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');