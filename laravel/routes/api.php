<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Get all employees
Route::get('employees', 'EmployeeController@getEmployee');

// Get Specic employee detail
Route::get('employee/{id}', 'EmployeeController@getEmployeeById');

// Add Employee
Route::post('addEmployee', 'EmployeeController@addEmployee');

// Update Employee
Route::put('updateEmployee/{id}', 'EmployeeController@updateEmployee');

// Delete Employee
Route::delete('deleteEmployee/{id}', 'EmployeeController@deleteEmployee');

//Linguagem
Route::get('linguagems', 'LinguagemController@getlinguagem');

Route::get('linguagems/{id}', 'LinguagemController@getlinguagemId');

Route::post('addLinguagems', 'LinguagemController@addLinguagems');

Route::put('updatelinguagem/{id}', 'LinguagemController@updateLinguagem');

Route::delete('deleteLinguagem/{id}', 'LinguagemController@deleteLinguagem');



// Vagas
Route::get('vagas', 'VagasController@getvagas');

Route::get('vagas{id}', 'VagasController@getvagasId');

Route::post('addvagas', 'VagasController@addvagas');

Route::put('updatevagacds', 'VagasController@updatevagas');

Route::delete('deletevagas/{id}', 'VagasController@deletevagas');

Route::post('addvagas}','VagasController@addvagas');

Route::put('updatevagas/{id}','VagasController@updatevagas');



//Candidato
Route::get('getCandidato', 'CandidatoController@getCandidato');

Route::get('getCandidatoId{id}', 'CandidatoController@getCandidatoId');

Route::post('addCandidatos', 'CandidatoController@addCandidatos');

Route::put('updateCandidato', 'CandidatoController@updateCandidato');

Route::delete('deleteCandidato/{id}', 'CandidatoController@deleteCandidato');

Route::post('addCandidatos}','CandidatoController@addvagas');

Route::put('updateCandidato/{id}','CandidatoController@updateCandidato');
