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


Route::get('/halaman-satu', function () {
    return view('halaman-satu');
});

Route::get('/halaman-dua', function () {
    return view('halaman-dua');
});

Route::get('/login', function () {
    return view('Users.login');
})->name('login');


route::post('/postlogin' , 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
route::get('/logout' , 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth', 'CheckLevel:superadmin']], function () {
    route::get('/halaman-satu', 'App\Http\Controllers\Homecontroller@halamansatu')->name('halaman-satu');
});

Route::group(['middleware' => ['auth', 'CheckLevel:superadmin,admin']], function () {
    route::get('/home', 'App\Http\Controllers\HomeController@index');   
    route::get('/halaman-dua', 'App\Http\Controllers\Homecontroller@halamandua')->name('halaman-dua');
});

route::get('/data-pasien' , 'App\Http\Controllers\PasienController@index')->name('data-pasien');
route::get('/create-pasien' , 'App\Http\Controllers\PasienController@create')->name('create-pasien');
route::post('/simpan-pasien' , 'App\Http\Controllers\PasienController@store')->name('simpan-pasien');
route::get('/edit-pasien/{id}' , 'App\Http\Controllers\PasienController@edit')->name('edit-pasien');
route::post('/update-pasien/{id}' , 'App\Http\Controllers\PasienController@update')->name('update-pasien');
route::get('/delete-pasien/{id}' , 'App\Http\Controllers\PasienController@destroy')->name('delete-pasien');
route::get('/search-pasien' , 'App\Http\Controllers\PasienController@search')->name('search-pasien');
route::get('/view-pasien/{id}' , 'App\Http\Controllers\PasienController@view')->name('view-pasien');
route::get('/view-pasien-report/{id}' , 'App\Http\Controllers\PasienController@cetakPasienReport')->name('view-pasien-report');


route::get('/data-staff' , 'App\Http\Controllers\StaffController@index')->name('data-staff');
route::get('/create-staff' , 'App\Http\Controllers\StaffController@create')->name('create-staff');
route::post('/simpan-staff' , 'App\Http\Controllers\StaffController@store')->name('simpan-staff');
route::get('/edit-staff/{id}' , 'App\Http\Controllers\StaffController@edit')->name('edit-staff');
route::post('/update-staff/{id}' , 'App\Http\Controllers\StaffController@update')->name('update-staff');
route::get('/delete-staff/{id}' , 'App\Http\Controllers\StaffController@destroy')->name('delete-staff');

route::get('/data-lab' , 'App\Http\Controllers\LaboratoriesController@index')->name('data-lab');
route::get('/create-lab' , 'App\Http\Controllers\LaboratoriesController@create')->name('create-lab');
route::post('/simpan-lab' , 'App\Http\Controllers\LaboratoriesController@store')->name('simpan-lab');
route::get('/edit-lab/{id}' , 'App\Http\Controllers\LaboratoriesController@edit')->name('edit-lab');
route::post('/update-lab/{id}' , 'App\Http\Controllers\LaboratoriesController@update')->name('update-lab');
route::get('/search-lab' , 'App\Http\Controllers\LaboratoriesController@search')->name('search-lab');

route::get('/cetak-data-pasien' , 'App\Http\Controllers\PasienController@cetakPasien')->name('cetak-data-pasien');
route::get('/download-pdf' , 'App\Http\Controllers\PasienController@downloadPDF')->name('download-pdf');
route::get('/download-pdf2/{id}' , 'App\Http\Controllers\PasienController@downloadPDF2')->name('download-pdf2');

route::get('/data-admin' , 'App\Http\Controllers\AdminController@index')->name('data-admin');