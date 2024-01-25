<?php

use Illuminate\Support\Facades\Route;
//include model user
use App\Models\User;

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

//show form to user
Route::get('/', function () {  
    return view('create');
});

//store data in database
Route::post('/', function(){
    //model
    $user = new User();  
    //get info from input
    $user-> name = request('name'); 
    $user-> email = request('email');
    $user-> password = request('password'); 
    $user-> gender = request('gender');
    $user-> birthday = request('birthday'); 
    $user-> status = request('status');

    //store data into table
    $user->save();

    //redirect back to view after save
    return redirect('/');
});