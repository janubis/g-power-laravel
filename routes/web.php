<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [FrontController::class, 'index']);
Route::get('/mn', [FrontController::class, 'indexmn']);
Route::get('/about/teams', [FrontController::class, 'teams']);
Route::get('/mn/about/teams', [FrontController::class, 'teamsmn']);
Route::get('/about/info', [FrontController::class, 'about']);
Route::get('/mn/about/info', [FrontController::class, 'aboutmn']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/mn/contact', [FrontController::class, 'contactmn']);
Route::post('/contact', [FrontController::class, 'saveContact']);
Route::get('/mn/contact', [FrontController::class, 'saveContactmn']);
Route::get('/projects', [FrontController::class, 'projects']);
Route::get('/mn/projects', [FrontController::class, 'projectsmn']);
Route::get('/projects/{id}', [FrontController::class, 'singleProjects']);
Route::get('/mn/projects/{id}', [FrontController::class, 'singleProjectsmn']);
Route::get('/news', [FrontController::class, 'news']);
Route::get('/mn/news', [FrontController::class, 'newsmn']);
Route::get('/news/{id}', [FrontController::class, 'singleNews']);
Route::get('/mn/news/{id}', [FrontController::class, 'singleNewsmn']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
