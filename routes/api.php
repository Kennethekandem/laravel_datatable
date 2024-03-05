<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    return response()->json(['message' => 'Hello world'], 200);
});

Route::get('/users', [TestController::class, 'fetchUsers']);
Route::get('/select', [TestController::class, 'selectSpecificColumns']);
Route::get('/addSelect', [TestController::class, 'addSelectColumns']);
Route::get('/topVote', [TestController::class, 'topVote']);
Route::get('/multipleWhere', [TestController::class, 'mmultipleWhere']);
Route::get('/simpleWhere', [TestController::class, 'multipleWhereSimplified']);
Route::get('/groupBy', [TestController::class, 'groupByClause']);
Route::get('distinctCheck', [TestController::class, 'distinctClause']);
Route::get('/where', [TestController::class, 'whereClause']);
Route::get('/inner-join', [TestController::class, 'innerJoinClause']);

Route::post('/register', 'TestController@Register');