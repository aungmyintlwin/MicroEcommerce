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


Route::group(['namespace'=>'API','middleware' => ['guest:api']], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
});

// Route::group([
//     'middleware' => ['api', 'cors'],
//     'namespace' =>'API',
// ], function () {
//      //Add you routes here, for example:
//      Route::apiResource('/posts','PostController');
//      Route::get('contact_info','ContactInfoController@index');
//     Route::get('get_categories','CategoryController@index');
//     Route::get('get_latest_products','ProductController@latest');
//     Route::get('get_best_selling_products','ProductController@best_selling');
//     Route::get('get_popular_products','ProductController@popular');
//     Route::get('get_products_category_id','ProductController@getProductCategory');
//     Route::get('get_product_id','ProductController@getProductById');
//     Route::post('store_order','OrderController@make_order');
//     Route::post('send_proof','OrderController@send_proof');

//     Route::get('get_reviews','ReviewController@index');
// });

Route::group(['middleware' => ['cors'],'namespace'=>'API'],function(){
    Route::get('contact_info','ContactInfoController@index');

    Route::get('get_categories','CategoryController@index');

    Route::get('get_latest_products','ProductController@latest');

    Route::get('get_best_selling_products','ProductController@best_selling');

    Route::get('get_popular_products','ProductController@popular');

    Route::get('get_products_category_id','ProductController@getProductCategory');

    Route::get('get_product_id','ProductController@getProductById');

    Route::post('store_order','OrderController@make_order');
    
    Route::post('send_proof','OrderController@send_proof');

    Route::get('get_reviews','ReviewController@index');
});
