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


    // $id = auth()->user()->id;
    return view('welcome');
});

Auth::routes();

Route::get('/mechanic/profile', 'MechanicController@getProfile')->name('mechProfile');
Route::get('/user/dashboard', 'VehicleOwnerController@getUserDashboard')->name('userDashboard');
Route::get('/mechanic/dashboard', 'MechanicController@returnDashboard')->name('mechDashboard');
Route::get('/vowner/profile', 'VehicleOwnerController@getVehicleOwnerProfile')->name('vOwnerProfile');
Route::get('/mechanic/search', 'VehicleOwnerController@searchMechanic')->name('searchMechanic');
Route::get('/mechanic/request/{id}', [
  'middleware' => 'auth',
  'uses' => 'VehicleOwnerController@requestMechanic'
    ])->name('reqMechanic');
Route::get('/mechanic/history', 'MechanicController@getMechanicHistory')->name('repairHistory');
Route::get('/repair/pending', 'RepairController@getPendingRepairs')->name('pendingRepairs');
Route::get('/user/pending', 'VehicleOwnerController@getUserPendingRepairs')->name('userPendingRepairs');
Route::get('/mechanic/active', 'MechanicController@getMechanicActiveRepairs')->name('mechanicActiveRepairs');
Route::get('/user/history', 'VehicleOwnerController@getUserHistory')->name('userRepairHistory');
Route::get('/user/active', 'VehicleOwnerController@getUserActiveRepairs')->name('userActiveRepairs');
Route::post('/mechanic/send-request/{id}', "RepairController@sendRepairRequest"
)->name('sendRequest');
Route::post('/repair/accept/{id}', 'RepairController@acceptRepairRequest')->name('acceptRequest');
Route::post('/repair/reject/{id}', 'RepairController@rejectRepairRequest')->name('rejectRequest');
Route::post('/repair/cancel/{id}', 'RepairController@userCancelRepairRequest')->name('cancelRequest');
