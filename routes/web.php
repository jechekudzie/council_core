<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Practitioner\PaymentsController;
use App\Http\Controllers\Practitioner\PractitionerApplicationsController;
use App\Http\Controllers\Practitioner\PractitionerContactController;
use App\Http\Controllers\Practitioner\PractitionerEmploymentController;
use App\Http\Controllers\Practitioner\PractitionerProfessionQualificationController;
use App\Http\Controllers\Practitioner\PractitionerProfessionRegisterController;
use App\Http\Controllers\Practitioner\PractitionersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Practitioner\PractitionerProfessionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your website application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});

/*
|--------------------------------------------------------------------------
| Admin Dashboard Utilities Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/create', function () {
    return view('admin.create');
});
/*
|--------------------------------------------------------------------------
| Application Categories and Requirements section
|--------------------------------------------------------------------------
*/
Route::resource('/admin/professions', 'Admin\ProfessionsController');
//Profession fees
Route::get('/admin/profession_fees/{profession}/index', 'Admin\ProfessionFeesController@index');
Route::get('/admin/profession_fees/{profession}/create', 'Admin\ProfessionFeesController@create');
Route::post('/admin/profession_fees/{profession}/store', 'Admin\ProfessionFeesController@store');
Route::get('/admin/profession_fees/{professionFee}/edit', 'Admin\ProfessionFeesController@edit');
Route::patch('/admin/profession_fees/{professionFee}/update', 'Admin\ProfessionFeesController@update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/home', [HomeController::class, 'index'])->name('home');
