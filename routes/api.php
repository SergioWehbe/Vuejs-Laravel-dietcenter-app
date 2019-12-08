<?php

use Illuminate\Http\Request;

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
Route::middleware('auth:api')->group(function(){
    //  these api's are exposed for user only
    // later on I will have to add user role so not everyone can get access to super users api
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Store Recipe
    Route::post('recipe','RecipeController@store');
    // Update Recipe
    Route::patch('recipe/{recipe}','RecipeController@update');
    // Delete Recipe
    Route::delete('recipe/{recipe}','RecipeController@destroy');

    Route::post('/logout','AuthController@logout');
});

// List Recipes
Route::get('recipes','RecipeController@index');
// List Single Recipe
Route::get('recipe/{id}','RecipeController@show');
// Auth for all users
Route::post('register','AuthController@register');
Route::post('login','AuthController@login');


