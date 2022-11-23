<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisKontakController;

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

Route::get('/', [HomeController::class, 'index'])->name('beranda');

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/project', function () {
//     return view('project');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/mastersiswa', function () {
    //     return view('mastersiswa');
    // });
    
    // Route::get('/masterproject', function () {
        //     return view('masterproject');
        // });
        
        // Route::get('/masterkontak', function () {
            //     return view('masterkontak');
            // });
            
Route::post('/login/login', [AuthController::class, 'login'])->name('login.in');
Route::post('/register/masuk', [AuthController::class, 'store'])->name('register.store');


Route::middleware(['guest'])->group(function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    
});

Route::middleware(['auth'])->group(function () {
    
    Route::prefix('admin')->group(function(){
    
    //Tanpa resource
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

        //Siswa Resource
    Route::resource('/mastersiswa', SiswaController::class);
    
        //Project
    Route::resource('/masterproject', ProjectController::class);
    
        //Kontak
    Route::resource('/masterkontak', KontakController::class);
    Route::resource('/jeniskontak', JenisKontakController::class);
    
    });
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



//Portofolio
Route::prefix('me')->group(function(){

Route::resource('/home', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/project', ProjekController::class);
Route::resource('/contact', ContactController::class);

});
