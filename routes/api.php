<?php

use App\Http\Controllers\BlogController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['GET', 'POST'], '/projects', [BlogController::class, "projects"]);

Route::match(['GET', 'POST'], '/projects/{id}', [BlogController::class, "project_single"]);

Route::match(['GET', 'POST'], '/blogs', [BlogController::class, "blogs"]);
Route::match(['GET', 'POST'], '/blogs/{id}', [BlogController::class, "blogs_single"]);

Route::match(['GET', 'POST'], '/get_authors', [BlogController::class, "get_authors"]);

Route::match(['GET', 'POST'], '/create_blog', [BlogController::class, "createBlog"]);

Route::match(['GET', 'POST', 'PUT'], '/edit_blog', [BlogController::class, "editblog"]);

Route::match(['GET', 'POST', 'DELETE'], '/delete_blog/{id}', [BlogController::class, "deleteblog"]);