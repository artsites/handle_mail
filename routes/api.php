<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/endpoint', function (Request $request) {
//     //
// });

/*
 * Tool
 */
Route::get('/mails', 'Artsites\HandleMail\Http\Controllers\ToolController@getMails');
Route::get('/chart', 'Artsites\HandleMail\Http\Controllers\ToolController@getChartData');
Route::get('/failed_count', 'Artsites\HandleMail\Http\Controllers\ToolController@failed');
Route::post('/delete/{id}', 'Artsites\HandleMail\Http\Controllers\ToolController@delete');

/*
 * Single mail
 */
Route::get('/single/{id}', 'Artsites\HandleMail\Http\Controllers\SingleController@single');

/*
 * Failed
 */
Route::get('/failed_list', 'Artsites\HandleMail\Http\Controllers\FailedController@get');
Route::get('/failed_single/{id}', 'Artsites\HandleMail\Http\Controllers\FailedController@single');
Route::post('/resend_mail/{id?}', 'Artsites\HandleMail\Http\Controllers\FailedController@retry');
Route::post('/delete_failed/{id}', 'Artsites\HandleMail\Http\Controllers\FailedController@delete');
