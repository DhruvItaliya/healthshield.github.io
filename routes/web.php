<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insurance\HomeController;
use App\Http\Controllers\insurance\PolicyController;
use App\Http\Controllers\insurance\ProfileController;
use App\Http\Controllers\insurance\AgentController;
use App\Http\Controllers\insurance\ClientController;
use App\Http\Controllers\insurance\RegistrationController;
use App\Http\Controllers\insurance\LoginController;

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

Route::get('/',[HomeController::class,'index']);
Route::post('/subscribe',[HomeController::class,'subscribe']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact-us',[HomeController::class,'contact_us']);
Route::get('/policy',[PolicyController::class,'index']);
Route::get('/policy/check/{id}/{premium}',[PolicyController::class,'logged_in_check']);
Route::get('/policy/get',[PolicyController::class,'get_policyholder_data']);
Route::get('/policy/policy_data',[PolicyController::class,'show_policy_data']);
Route::get('policy/registered_policy',[PolicyController::class,'registered_policy']);
Route::get('/policy_registration',[PolicyController::class,'register_policy']);
Route::post('/policy_registration',[PolicyController::class,'new_policy_data']);
Route::get('/agent',[AgentController::class,'index']);
Route::post('/agent',[AgentController::class,'register']);
Route::get('/agent/client-data',[AgentController::class,'client_data']);
Route::get('/agent/registered-user',[AgentController::class,'registered_user']);
Route::get('/agent-profile',[AgentController::class,'show_profile']);
Route::get('/set-agent-profile',[AgentController::class,'profile']);
Route::post('/set-agent-profile',[AgentController::class,'set_profile']);
Route::get('/edit-agent-profile',[AgentController::class,'edit_profile']);
Route::post('/edit-agent-profile',[AgentController::class,'edit_agent_profile']);
Route::get('/profile',[ClientController::class,'profile']);
Route::post('/profile',[ClientController::class,'set_profile']);
Route::get('/edit-profile',[ClientController::class,'edit_profile']);
Route::post('/edit-profile',[ClientController::class,'send_edit_profile']);
Route::get('/user-profile',[ClientController::class,'show_profile']);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register/client',[RegistrationController::class,'client']);
Route::post('/register/agent',[RegistrationController::class,'agent']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login/client',[LoginController::class,'client']);
Route::post('/login/agent',[LoginController::class,'agent']);
Route::get('/logout',[LoginController::class,'logout']);

