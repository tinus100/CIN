<?php


use App\Http\Controllers\Calender2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\EmailMessageController;



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




// General routing

Route::resource('/', IndexController::class)->middleware(['auth',
 //                                                         'verified'
                                                         ]);


require __DIR__.'/auth.php';

// CRUD Routing
Route::resource('/registration', RegistrationController::class)->middleware(['auth']);
Route::resource('/events', Calender2Controller::class)->middleware(['auth']);
Route::post('events/action', [CalenderController::class, 'action'])->middleware(['auth']);



// Testing routes
Route::get('/customer', function() {
    return view('functions/customer/show');
})->middleware(['auth']);
Route::get('/admin', function() {
    return view('functions/admin/show');
})->middleware(['auth']);

route::get('/contact', [EmailMessageController::class, 'show']);
route::post('/registration/{registration}/email', [EmailMessageController::class, 'store']);

// Admin routes
Route::resource('admin', AdminPageController::class)->middleware(['auth']);


