<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ScanController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("Salam", function () {
    return response()->json([
        "status" => "success",
        "message" => "salam dari dunia",
    ]);
});

Route::post('/login',[AuthController::class, 'login']);


    
Route::middleware('auth:sanctum')->group(function() {

    // panggil public function logout d ScanController
    Route::post('/logout',[AuthController::class, 'logout']);


    // panggil public function index d ScanController
    Route::get("scan", [ScanController::class, "index"]);


    // panggil public function show d ScanController
    Route::get("scan/{id}",[ScanController::class,"show"]);


    // panggil public function store d ScanController
    Route::post("scan" , [ScanController::class, "store"]);


    Route::post("scan/{id}" , [ScanController::class, "update"]);

    Route::delete("scan/{id}" , [ScanController::class, "destroy"]);

});
