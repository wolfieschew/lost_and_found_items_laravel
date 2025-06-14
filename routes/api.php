<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClaimApiController;
use App\Http\Controllers\Api\ReturnApiController;
use App\Http\Controllers\Api\NotificationApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('/', function () {
        return response()->json([
            'name' => 'Lost and Found Items API Barang Hilang',
            'version' => '1.0.1',
            'endpoints' => [
                // Items Endpoints
                'GET /api/v1/items' => 'Daftar semua barang',
                'GET /api/v1/items/my' => 'Daftar barang milik user (auth required)',
                'GET /api/v1/items/{id}' => 'Detail barang',
                'GET /api/v1/search' => 'Pencarian barang',
                'POST /api/v1/items' => 'Tambah barang baru (auth required)',
                'PUT /api/v1/items/{id}' => 'Update barang (auth required)',
                'DELETE /api/v1/items/{id}' => 'Hapus barang (auth required)',

                // Lost Items Endpoints
                'GET /api/v1/lost-items' => 'Daftar semua barang hilang',
                'GET /api/v1/lost-items/{id}' => 'Detail barang hilang',
                'GET /api/v1/lost-items/search' => 'Pencarian barang hilang',
                'POST /api/v1/lost-items' => 'Tambah barang hilang baru (auth required)',
                'PUT /api/v1/lost-items/{id}' => 'Update barang hilang (auth required)',
                'DELETE /api/v1/lost-items/{id}' => 'Hapus barang hilang (auth required)',
                'POST /api/v1/lost-items/{id}/claim' => 'Klaim barang hilang (auth required)',

                // Found Items Endpoints
                'GET /api/v1/found-items' => 'Daftar semua barang ditemukan',
                'GET /api/v1/found-items/{id}' => 'Detail barang ditemukan',
                'GET /api/v1/found-items/search' => 'Pencarian barang ditemukan',
                'POST /api/v1/found-items' => 'Tambah barang ditemukan baru (auth required)',
                'PUT /api/v1/found-items/{id}' => 'Update barang ditemukan (auth required)',
                'DELETE /api/v1/found-items/{id}' => 'Hapus barang ditemukan (auth required)',

                // Claims Endpoints
                'POST /api/v1/found-items/{id}/claim' => 'Klaim barang ditemukan (auth required)',
                'GET /api/v1/claims' => 'Daftar semua klaim (admin only)',
                'GET /api/v1/claims/my' => 'Daftar klaim milik user (auth required)',
                'GET /api/v1/claims/{id}' => 'Detail klaim (auth required)',
                'PUT /api/v1/claims/{id}' => 'Update klaim (auth required)',
                'DELETE /api/v1/claims/{id}' => 'Hapus klaim (auth required)',

                // Return Endpoints
                'POST /api/v1/lost-items/{id}/return' => 'Kembalikan barang hilang (auth required)',
                'GET /api/v1/returns' => 'Daftar semua pengembalian (admin only)',
                'GET /api/v1/returns/my' => 'Daftar pengembalian milik user (auth required)',
                'GET /api/v1/returns/{id}' => 'Detail pengembalian (auth required)',
                'PUT /api/v1/returns/{id}' => 'Update pengembalian (auth required)',
                'DELETE /api/v1/returns/{id}' => 'Hapus pengembalian (auth required)',

                // Notification Endpoints
                'GET /api/v1/notifications/my' => 'Daftar notifikasi milik user (auth required)',
                'PUT /api/v1/notifications/{id}/read' => 'Tandai notifikasi sebagai dibaca (auth required)',
                'PUT /api/v1/notifications/read-all' => 'Tandai semua notifikasi sebagai dibaca (auth required)',
                'DELETE /api/v1/notifications/{id}' => 'Hapus notifikasi (auth required)',



                // Authentication Endpoints
                'POST /api/v1/register' => 'Register user',
                'POST /api/v1/login' => 'Login user',
                'POST /api/v1/logout' => 'Logout user (auth required)',
            ]
        ]);
    });


    Route::get('/test', function () {
        return response()->json(['message' => 'Test works!']);
    });

    Route::get('/images/{path}', function ($path) {
        $fullPath = storage_path('app/public/' . $path);

        if (!file_exists($fullPath)) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        return response()->file($fullPath, [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, OPTIONS',
            'Cache-Control' => 'public, max-age=86400'
        ]);
    })->where('path', '.*');

    // Authentication
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);
        Route::put('/user/profile', [AuthController::class, 'updateProfile']);
    });

    // Public endpoints
    Route::get('/items', [ItemApiController::class, 'index']);
    Route::get('/search', [ItemApiController::class, 'search']);
    Route::get('/lost-items', [ItemApiController::class, 'lostItems']);

    // Protected endpoints
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/items/my', [ItemApiController::class, 'myItems']);

        // Items CRUD
        Route::post('/items', [ItemApiController::class, 'store']);
        Route::put('/items/{id}', [ItemApiController::class, 'update']);
        Route::delete('/items/{item}', [ItemApiController::class, 'destroy']);

        // Claims
        Route::post('/items/{item}/claim', [ItemApiController::class, 'claim']);
        Route::post('/items/{item}/return', [ItemApiController::class, 'returnItem']);
    });
});

Route::get('/items/{item}', [ItemApiController::class, 'show']);


// ---- END POINT LOST ITEMS ----
Route::prefix('v1/lost-items')->group(function () {
    // Public endpoints - URUTAN PENTING!
    Route::get('/search', [ItemApiController::class, 'searchLostItems']);
    Route::get('/', [ItemApiController::class, 'lostItems']);
    Route::get('/{item}', [ItemApiController::class, 'showLostItem']);

    // Protected endpoints (auth required)
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [ItemApiController::class, 'storeLostItem']);
        Route::put('/{id}', [ItemApiController::class, 'updateLostItem']);
        Route::delete('/{id}', [ItemApiController::class, 'destroyLostItem']);
        Route::post('/{item}/claim', [ItemApiController::class, 'claimLostItem']);
    });
});


// -- END POINT FOUND ITEMS ----
Route::prefix('v1/found-items')->group(function () {
    // Public endpoints
    Route::get('/', [ItemApiController::class, 'foundItems']);
    Route::get('/search', [ItemApiController::class, 'searchFoundItems']);
    Route::get('/{item}', [ItemApiController::class, 'showFoundItem']);

    // Protected endpoints (auth required)
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [ItemApiController::class, 'storeFoundItem']);
        Route::put('/{id}', [ItemApiController::class, 'updateFoundItem']);
        Route::delete('/{id}', [ItemApiController::class, 'destroyFoundItem']);
        Route::post('/{item}/claim', [ItemApiController::class, 'claimFoundItem']);
    });
});


// -- END POINT CLAIMS ----
Route::prefix('v1/claims')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [ClaimApiController::class, 'index']);
    Route::get('/my', [ClaimApiController::class, 'myClaims']);
    Route::get('/{claim}', [ClaimApiController::class, 'show']);
    Route::put('/{claim}', [ClaimApiController::class, 'update']);
    Route::delete('/{claim}', [ClaimApiController::class, 'destroy']);
});


// -- END POINT RETURN ----
Route::prefix('v1/returns')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [ReturnApiController::class, 'index']);
    Route::get('/my', [ReturnApiController::class, 'myReturns']);
    Route::get('/{return}', [ReturnApiController::class, 'show']);
    Route::put('/{return}', [ReturnApiController::class, 'update']);
    Route::delete('/{return}', [ReturnApiController::class, 'destroy']);
});

Route::post('/v1/lost-items/{item}/return', [ItemApiController::class, 'returnLostItem'])
    ->middleware('auth:sanctum');

// -- END POINT NOTIFICATIONS ----
Route::prefix('v1/notifications')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [NotificationApiController::class, 'index']);
    Route::get('/my', [NotificationApiController::class, 'myNotifications']);
    Route::get('/{id}', [NotificationApiController::class, 'show']);
    Route::put('/{id}/read', [NotificationApiController::class, 'markAsRead']);  // <-- ini routenya
    Route::put('/read-all', [NotificationApiController::class, 'markAllAsRead']);
    Route::delete('/{id}', [NotificationApiController::class, 'destroy']);
});
