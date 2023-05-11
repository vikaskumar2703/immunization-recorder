<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[AuthController::class,'index']);

Route::get('/login',[AuthController::class,'login']);

Route::get('/doctor-register',[AuthController::class,'doctor_registration']);

Route::post('/auth-check',[AuthController::class,'auth']);

Route::post('/doctor-register-db',[AuthController::class,'doctor_register_db']);

Route::get('/child-registration',[AuthController::class,'child_register']);
Route::post('/save-immunisation-data',[DashboardController::class,'save_immunisation_table']);

Route::get('/get-password',[AuthController::class,'get_password']);

Route::get('/send-sms',[DashboardController::class,'sendsms']);


Route::get('/search-immunisation-card',[DashboardController::class,'search']);

Route::post('/find-child',[DashboardController::class,'search_db']);

Route::post('/dashboard-search',[DashboardController::class,'dashboard_search']);


Route::middleware(['auth'])->group(function () {

    Route::get('/view-immunisation-details/{id}',[DashboardController::class,'immunisation_table']);
    
    Route::get('/register',[AuthController::class,'register']);

    Route::get('/dashboard', function () {
        $user = Auth::user();
        $childs = DB::table('immunisation_recorders')->get()->toArray();
        return view('dashboard',['user'=>$user,'childs'=>$childs]);
    });

    Route::get('/child-profile', function () {
        $user = Auth::user();
        $childs = DB::table('childs')->where('child_p_id',$user->id)->get()->toArray();
        return view('child_profiles',['user'=>$user,'childs'=>$childs]);
    });

    Route::post('/save-immunisation-data',[DashboardController::class,'save_immunisation_table']);

    Route::post('/update-immunisation-data/{id}',[DashboardController::class,'update_immunisation_table']);
    
    Route::get('/logout',[AuthController::class,'logout']);
});