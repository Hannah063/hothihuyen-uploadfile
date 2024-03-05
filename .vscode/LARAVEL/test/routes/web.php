<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


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

// Route::get('/admin/post', function (Request $request) {
//     if ($request->is('admin/*')) {
//         return '<h1>Request path matches with "admin/*" patterns</h1>';
//     }
// });

Route::get('/', function(){
    return view('form');
});

Route::get('/uploadFile', function(){
    return view('file');
});

// Route::post('/post', [FormController::class, 'post']);
Route::post('/post', [FormController::class, 'post']);
Route::post('/filePHP', [FormController::class, 'uploadFile']);



// Route::get('/', function (Request $request) {
//     echo 'Current method HTTP: '. $request->method() . '<br>';
//     if ($request->isMethod('get')) {
//         echo 'This is GET method HTTP';
//     }
// });

Route::get('/userIp', function (Request $request) {
    return '<h1>Địa chỉ IP người dùng: '.$request->ip().'</h1>';
});

Route::get('/users', function () {
    global $name;
    return 'The users are: '.$name;
});

use App\Http\Controllers\UserController;

Route::get('/goicontroller', [UserController::class, 'xinchao']);

use App\Http\Controllers\PhotoController;

Route::resource('/photos', PhotoController::class);

use App\Http\Controllers\MyController;

Route::resource('/my', MyController::class);