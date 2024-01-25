<?php

use Illuminate\Support\Facades\Route;
//include model user
use App\Models\User;
//validate form
use Illuminate\Support\Facades\Validator;

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
    return view('formPage');
});

//store data in database
Route::post('/', function(){
    //validation: set required for all input type
    $validator = Validator::make(request()->all(),[
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'gender' => 'required',
        'birthday' => 'required',
        'status' => 'required'
    ]);

    //show message after validate
    if ($validator->fails()){
        return redirect()->back()->withErrors($validator);
    }
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

//return data from database users
Route::get('/tablePage', function(){
    $users = DB::table('users')->get();
    // dd($users); //checking connection
    return view ('tablePage', [
        'users' => $users
    ]);
});
