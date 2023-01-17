<?php
use Illuminate\Support\Facades\Route;
use Jerickcm\Inspire\Controllers\InspirationController;
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
Route::get('inspire', InspirationController::class);
// Route::get('inspire', function(Fhsinchy\Inspire\Inspire $inspire) {
//     return $inspire->justDoIt();
// });
