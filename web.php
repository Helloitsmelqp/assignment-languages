<?php

use App\Http\Controllers\RequestController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\http\Response;
use App\Http\Controllers\LanguageController;

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
Route::get('/language', [LanguageController::class, 'showForm'])->name('language.form');
Route::post('/language', [LanguageController::class, 'savePreferences'])->name('language.save');
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [Controller::class, 'index']);
Route::get('/posts/create', [Controller::class, 'create']);
Route::post('/posts', [Controller::class, 'store']);
Route::get('/posts/{id}/edit', [Controller::class, 'edit']);
Route::put('/posts/{id}', [Controller::class, 'update']);
Route::delete('/posts/{id}', [Controller::class, 'destroy']);


Route::get('/request/create', [RequestController::class, "create1"])->name('request.create1');
Route::post('/request', [RequestController::class, "store"])->name('request.store');
Route::post('admin/request', [RequestController::class, "store"])->name('admin.request.store');

Route::get('/request/create1', function () {
    return view('request.create');
});
Route::get('/request/create1', function () {
    return view('welcome');
});


Route::get('/afnan', function () {
    return response('welcome') 
    ->withHeaders(
    ['content '=>'text', 
             'type'=>'json'
    ]);
});

Route::get('/afnan', function () {
   // return redirect() ->action([Controller::class, "index"]);
   return redirect()->action([Controller::class,"index"])->with('msg','sesstion-value');
});


Route::get('/afn', function () {
   $fileName='idea.txt';
   return response()->download($fileName);
})->name('test');

Route::get('/afnan{user}', function ($user) {
    return $user;
});
*/