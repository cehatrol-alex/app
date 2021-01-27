<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {


    $search = $request->input('search');


    $users = $search ? User::where('name', 'LIKE', "%$search%")->simplePaginate(10): User::simplePaginate(10);


    return view('welcome', [
        'users' => $users,
        'search' => $search
    ]);
});


