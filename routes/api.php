<?php

use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TreeDetailController;
use App\Models\Tree_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// TODO Ajouter les middlewares et les fonctions dans les controlleurs

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Requester (demands)
Route::post('/create-demand', [DemandController::class, 'create_demand'])
    ->name('create_demand');

Route::put('/cancel-demand/{departmentId}/{demandId}', [DemandController::class, 'cancel_demand'])
    ->name('cancel_demand');

Route::put('/accept-demand/{departmentId}/{demandId}', [DemandController::class, 'accept_demand'])
    ->name('accept_demand');

Route::put('/finish-demand/{departmentId}/{demandId}', [DemandController::class, 'finish_demand'])
    ->name('finish_demand');

Route::put('/refuse-demand/{departmentId}/{demandId}', [DemandController::class, 'refuse_demand'])
    ->name('refuse_demand');

Route::get('/get-department-demands/{departmentId}', [DemandController::class, 'get_department_demands'])
    ->name('get_department_demands');

Route::get('/get-demand-by-id/{departmentId}/{demandId}', [DemandController::class, 'get_demand_by_id'])
    ->name('get_demand_by_id');

Route::get('/get-user-demands/{departmentId}/{demandId}', [DemandController::class, 'get_user_demands'])
    ->name('get_user_demands');


//Positions
Route::get('/get-positions-with-attribution/{departmentId}', [PositionController::class, 'get_positions_with_attribution'])
    ->name('get_positions_with_attribution');

Route::get('/get-patient-infos/{userId}/{departmentId}', [PatientController::class, 'get_patient_infos'])
    ->name('get_patient_infos');


//Infos

//Notifs

//Users
Route::post('/create-caregiver/{departmentId}', [CaregiverController::class, 'create_caregiver'])
    ->name('create_caregiver');

Route::put('/update-caregiver/{caregiverId}', [CaregiverController::class, 'update_caregiver'])
    ->name('update_caregiver');

Route::delete('/delete-caregiver/{caregiverId}', [CaregiverController::class, 'delete_caregiver'])
    ->name('delete_caregiver');

Route::get('/get-caregiver-infos/{caregiverId}', [CaregiverController::class, 'get_caregiver_infos'])
    ->name('get_caregiver_infos');

Route::post('/check-caregiver-pin/{caregiverId}', [CaregiverController::class, 'check_caregiver_pin'])
    ->name('check_caregiver_pin');

Route::post('/get-patient-token', [PatientController::class, 'get_patient_token'])
    ->name('get_patient_token');

Route::get('/get-department-caregivers/{departmentId}', [DepartmentController::class, 'get_department_caregivers'])
    ->name('get_department_caregivers');

//History

//Tree
Route::get('/get-root-tree/{departmentId}', [TreeDetailController::class, 'get_root_tree'])
    ->name('get-root-tree');

Route::get('/get-children-from-parent/{parentId}/{departmentId}', [TreeDetailController::class, 'get_children_from_parent'])
    ->name('get_children_from_parent');
