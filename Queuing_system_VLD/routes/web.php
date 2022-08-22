<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
//home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//thiết bị
Route::get('/thiet-bi', [App\Http\Controllers\DeviceController::class, 'index'])->name('device');
Route::get('/them-thiet-bi', [App\Http\Controllers\DeviceController::class, 'create'])->name('device.add');
Route::post('/luu-thiet-bi', [App\Http\Controllers\DeviceController::class, 'save'])->name('device.save');
Route::get('/chi-tiet/{id}', [App\Http\Controllers\DeviceController::class, 'detail'])->name('device.detail');
Route::get('/chinh-sua-thiet-bi/{id}', [App\Http\Controllers\DeviceController::class, 'edit'])->name('device.edit');
Route::post('/cap-nhat/{id}', [App\Http\Controllers\DeviceController::class, 'update'])->name('device.update');
Route::get('/device-active', [App\Http\Controllers\DeviceController::class, 'device_active'])->name('device.active');
Route::get('/device-shut-dow', [App\Http\Controllers\DeviceController::class, 'device_shut_dow'])->name('device.shutdow');
Route::get('/device-connecting', [App\Http\Controllers\DeviceController::class, 'device_connecting'])->name('device.connecting');
Route::get('/device-disconnect', [App\Http\Controllers\DeviceController::class, 'device_disconnect'])->name('device.disconnect');

//dịch vụ
Route::get('/dich-vu', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/them-dich-vu', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.add');
Route::post('/luu-dich-vu', [App\Http\Controllers\ServiceController::class, 'save'])->name('service.save');
Route::get('/service-active', [App\Http\Controllers\ServiceController::class, 'service_active'])->name('service.active');
Route::get('/service-shut-dow', [App\Http\Controllers\ServiceController::class, 'service_shut_dow'])->name('service.shutdow');
Route::get('/service-detail/{id}', [App\Http\Controllers\ServiceController::class, 'service_detail'])->name('service.detail');
Route::get('/edit-service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service'])->name('service.edit');
Route::post('/update-service/{id}', [App\Http\Controllers\ServiceController::class, 'update_service'])->name('service.update');

//cấp số
Route::get('/number', [App\Http\Controllers\NumberController::class, 'index'])->name('number');
Route::get('/add-number', [App\Http\Controllers\NumberController::class, 'create'])->name('number.add');
Route::get('/save-number/{number_name}/{number_service}', [App\Http\Controllers\NumberController::class, 'save'])->name('number.save');
Route::get('/ten-dich-vu/{name}', [App\Http\Controllers\NumberController::class, 'fill_name'])->name('number.fillname');
Route::get('/trang-thai/dang-cho', [App\Http\Controllers\NumberController::class, 'fill_dangcho'])->name('number.dangcho');
Route::get('/trang-thai/da-su-dung', [App\Http\Controllers\NumberController::class, 'fill_done'])->name('number.done');
Route::get('/trang-thai/da-huy', [App\Http\Controllers\NumberController::class, 'fill_huy'])->name('number.dahuy');
//báo cáo cấp số
Route::get('/report', [App\Http\Controllers\NumberController::class, 'report'])->name('');

//role
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('');
Route::get('/add-role', [App\Http\Controllers\RoleController::class, 'create'])->name('');
Route::post('/save', [App\Http\Controllers\RoleController::class, 'save'])->name('');
Route::get('/edit-role', [App\Http\Controllers\RoleController::class, 'edit'])->name('');
Route::get('/search-role', [App\Http\Controllers\RoleController::class, 'search'])->name('');

//account
Route::get('/account', [App\Http\Controllers\accountController::class, 'index'])->name('');
Route::get('/add-account', [App\Http\Controllers\accountController::class, 'create'])->name('acount.add');
Route::post('/save-account', [App\Http\Controllers\accountController::class, 'save'])->name('account.save');
Route::get('/edit-account/{id}', [App\Http\Controllers\accountController::class, 'edit'])->name('');
//normalizer_get_raw_decomposition
Route::get('/note', [App\Http\Controllers\accountController::class, 'note'])->name('');