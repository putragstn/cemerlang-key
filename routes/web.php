<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OperatingHourController;
use App\Http\Controllers\OtherServiceController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\VideoController;
use App\Models\Image;
use App\Models\About;
use App\Models\OtherService;
use App\Models\OurService;
use App\Models\Video;
use App\Models\Slogan;
use App\Models\Contact;
use App\Models\OperatingHour;
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

Route::get('/', function () {
    return view('index', [
        'galleryImages' => Image::all(),
        'videos'        => Video::all(),
        'otherServices' => OtherService::all(),
        'ourServices'   => OurService::all(),
        'days'          => OperatingHour::all(),
        'about'         => About::find(1),
        'contact'       => Contact::find(1),
        'slogan'        => Slogan::find(1)
    ]);
});



Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
// Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
// Route::post('/register', [AuthController::class, 'storeRegister'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/ubah-slogan', [DashboardController::class, 'editSlogan'])->middleware('auth');
Route::put('/dashboard/ubah-slogan', [DashboardController::class, 'updateSlogan'])->middleware('auth');
Route::get('/dashboard/ganti-password', [DashboardController::class, 'editPassword'])->middleware('auth');
Route::put('/dashboard/ganti-password', [DashboardController::class, 'updatePassword'])->middleware('auth');
Route::get('/dashboard/akun', [DashboardController::class, 'editAkun'])->middleware('auth');
Route::put('/dashboard/akun', [DashboardController::class, 'updateAkun'])->middleware('auth');

Route::resource('/dashboard/gambar', ImageController::class)->middleware('auth');
Route::resource('/dashboard/video', VideoController::class)->middleware('auth');
Route::resource('/dashboard/layanan-lainnya', OtherServiceController::class)->middleware('auth');
Route::resource('/dashboard/layanan-kami', OurServiceController::class)->middleware('auth');
Route::resource('/dashboard/tentang-kami', AboutController::class)->middleware('auth');
Route::resource('/dashboard/kontak', ContactController::class)->middleware('auth');
Route::resource('/dashboard/jam-operasional', OperatingHourController::class)->middleware('auth');
