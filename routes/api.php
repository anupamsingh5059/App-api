<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/post', function(){

  return ['name'=>'Anupam Developer', 'email'=>'abc@gmail.com', 'phone'=>'1234567890'];


// $data = [
//     'name'  => 'Anupam Developer',
//     'email' => 'abc@gmail.com',
//     'phone' => '1234567890'
// ];

// return response()->json($data);


});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'list']);