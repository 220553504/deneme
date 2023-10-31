<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modulkontrol;
use App\Http\Controllers\Modulyonetim;
use App\Http\Controllers\Sayfakontrol;
use App\Http\Controllers\Homecontrol;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/eticaret', [Homecontrol::class, "home"])->name("house");
Route::get('/eticaret/bilgisayar', [Homecontrol::class, "bilgisayar"])->name("bilgisayar");
Route::get('/eticaret/telefon', [Homecontrol::class, "telefon"])->name("telefon");
Route::get('/eticaret/mobilaksesuar', [Homecontrol::class, "mobil"])->name("mobilaksesuar");
Route::get('/eticaret/tablet', [Homecontrol::class, "tablet"])->name("tablet");
Route::get('/eticaret/kamera', [Homecontrol::class, "kamera"])->name("kamera");
Route::get('/eticaret/sepetim/{name}', [Homecontrol::class, "sepet"])->name("sepet");
Route::middleware("oturumkontrol")->get('/eticaret/sepete-ekle/{name}/{resim}/{baslik}/{fiyat}', [Homecontrol::class, "sepetekle"])->name("sepete-ekle");
Route::get('/eticaret/kayitol', [Homecontrol::class, "kayitol"])->name("kayitol");
Route::post('/eticaret/kayitpost', [Homecontrol::class, "kayitpost"])->name("kayitpost");
Route::get('/girisyap', [Homecontrol::class, "girisyap"])->name("girisyap");
Route::post('/girispost', [Homecontrol::class, "girispost"])->name("girispost");
Route::get('/eticaret/sil/{name}/{id}', [Homecontrol::class, "sil"])->name("silmek");
Route::post('/payment', [Homecontrol::class, "payment"])->name("payment");





Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->prefix('eticaret')->group(function(){

    Route::get('/yonetimpaneli', [Modulkontrol::class, "anasayfa"])->name('home');
    Route::get('/yonetimpaneli/modulekle', [Modulkontrol::class, "modul"])->name('modul');
    Route::post('yonetimpaneli/modulekle', [Modulkontrol::class, "modulekle"])->name('moduleklepost');
    Route::get('yonetimpaneli/liste/{modul}', [Modulyonetim::class, "liste"])->name('liste');
    Route::get('/yonetimpaneli/siparisteslim', [Modulyonetim::class, "siparisteslim"])->name('siparisteslim');
    Route::get('/yonetimpaneli/siparissil/{name}/{id}', [Modulyonetim::class, "siparissil"])->name('siparissil');
    Route::get('/yonetimpaneli/ekle/{modul}', [Modulyonetim::class, "ekle"])->name('ekle');
    Route::post('/yonetimpaneli/eklepost/{modul}', [Modulyonetim::class, "eklepost"])->name('eklepost');
    Route::get('/yonetimpaneli/duzenle/{modul}/{id}', [Modulyonetim::class, "duzenle"])->name('duzenle');
    Route::post('/yonetimpaneli/duzenlepost/{modul}/{id}', [Modulyonetim::class, "duzenlepost"])->name('duzenlepost');
    Route::get('/yonetimpaneli/sil/{modul}/{id}', [Modulyonetim::class, "sil"])->name('sil');
    Route::get('/yonetimpaneli/durum/{modul}/{id}', [Modulyonetim::class, "durum"])->name('durum');
    Route::get('/yonetimpaneli/ayarlar', [Modulyonetim::class, "ayarlar"])->name('ayarlar');
    Route::post('/yonetimpaneli/ayarlarpost', [Modulyonetim::class, "ayarlarpost"])->name('ayarlarpost');

});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




