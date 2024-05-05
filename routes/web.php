<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[EmployeeController::class,'index']);
Route::get("/add",[EmployeeController::class,'create']);
Route::post('/addData',[EmployeeController::class,'store']);
Route::get('/view',function(){
    return view('view');
});

