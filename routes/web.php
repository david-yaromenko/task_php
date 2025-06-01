<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RegistryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//user
Route::get('/registration', [UserController::class, 'registration']);
Route::post('/reg', [UserController::class, 'userRegistration']);

Route::get('/', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'userLogin']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/home', [UserController::class, 'homePage'])->name('home')->middleware('auth');
//emp
Route::get('/emp', [EmployeeController::class, 'employee'])->middleware('auth');
Route::post('/create/emp', [EmployeeController::class, 'createEmployee'])->middleware('auth');
//material
Route::get('/material', [MaterialController::class, 'material'])->middleware('auth');
Route::post('/create/material', [MaterialController::class, 'createMaterial'])->middleware('auth');
//document
Route::get('/region', [DocumentController::class, 'choseRegion'])->middleware('auth');
Route::post('/region/id', [DocumentController::class, 'getRegionId'])->middleware('auth');

Route::get('/document', [DocumentController::class, 'createDocument'])->middleware('auth');
Route::post('/create/doc', [DocumentController::class, 'createAct'])->middleware('auth');
Route::get('/act', [DocumentController::class, 'createAct'])->middleware('auth');
//registry
Route::get('/registry', [RegistryController::class, 'registry'])->middleware('auth');
Route::post('/registry/materials', [RegistryController::class, 'getRegistry'])->middleware('auth');
