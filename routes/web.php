<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::any("/addRecipeindex" , [RecipeController::class , 'index'])->middleware("auth");
Route::any("/add_recipe" , [RecipeController::class , 'add_recipe'])->middleware("auth");
Route::any("/recipe_list" , [RecipeController::class , 'recipe_list'])->middleware("auth");
Route::any("/explore_new_people" , [RecipeController::class , 'explore_new_people'])->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
