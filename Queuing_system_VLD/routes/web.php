<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
//home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
//thiết bị
Route::get('/thiet-bi', [App\Http\Controllers\DeviceController::class, 'index']);
Route::get('/them-thiet-bi', [App\Http\Controllers\DeviceController::class, 'create']);
Route::post('/luu-thiet-bi', [App\Http\Controllers\DeviceController::class, 'save']);
Route::get('/chi-tiet/{id}', [App\Http\Controllers\DeviceController::class, 'detail']);
Route::get('/chinh-sua-thiet-bi/{id}', [App\Http\Controllers\DeviceController::class, 'edit']);
Route::post('/cap-nhat/{id}', [App\Http\Controllers\DeviceController::class, 'update']);
Route::get('/device-active', [App\Http\Controllers\DeviceController::class, 'device_active']);
Route::get('/device-shut-dow', [App\Http\Controllers\DeviceController::class, 'device_shut_dow']);
Route::get('/device-connecting', [App\Http\Controllers\DeviceController::class, 'device_connecting']);
Route::get('/device-disconnect', [App\Http\Controllers\DeviceController::class, 'device_disconnect']);

//dịch vụ
Route::get('/dich-vu', [App\Http\Controllers\ServiceController::class, 'index']);
Route::get('/them-dich-vu', [App\Http\Controllers\ServiceController::class, 'create']);
Route::post('/luu-dich-vu', [App\Http\Controllers\ServiceController::class, 'save']);
Route::get('/service-active', [App\Http\Controllers\ServiceController::class, 'service_active']);
Route::get('/service-shut-dow', [App\Http\Controllers\ServiceController::class, 'service_shut_dow']);
Route::get('/service-detail/{id}', [App\Http\Controllers\ServiceController::class, 'service_detail']);
Route::get('/edit-service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service']);
Route::post('/update-service/{id}', [App\Http\Controllers\ServiceController::class, 'update_service']);

//cấp số
Route::get('/number', [App\Http\Controllers\NumberController::class, 'index']);
Route::get('/add-number', [App\Http\Controllers\NumberController::class, 'create']);
Route::get('/save-number/{number_name}/{number_service}', [App\Http\Controllers\NumberController::class, 'save']);
Route::get('/ten-dich-vu/{name}', [App\Http\Controllers\NumberController::class, 'fill_name']);
Route::get('/trang-thai/dang-cho', [App\Http\Controllers\NumberController::class, 'fill_dangcho']);
Route::get('/trang-thai/da-su-dung', [App\Http\Controllers\NumberController::class, 'fill_done']);
Route::get('/trang-thai/da-huy', [App\Http\Controllers\NumberController::class, 'fill_huy']);
//báo cáo cấp số
Route::get('/report', [App\Http\Controllers\NumberController::class, 'report']);

//role
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index']);
Route::get('/add-role', [App\Http\Controllers\RoleController::class, 'create']);
Route::post('/save', [App\Http\Controllers\RoleController::class, 'save']);
Route::get('/edit-role', [App\Http\Controllers\RoleController::class, 'edit']);
Route::get('/search-role', [App\Http\Controllers\RoleController::class, 'search']);

//account
Route::get('/account', [App\Http\Controllers\accountController::class, 'index']);
Route::get('/add-account', [App\Http\Controllers\accountController::class, 'create']);
Route::post('/save-account', [App\Http\Controllers\accountController::class, 'save']);
Route::get('/edit-account/{id}', [App\Http\Controllers\accountController::class, 'edit']);
//normalizer_get_raw_decomposition
Route::get('/note', [App\Http\Controllers\accountController::class, 'note']);