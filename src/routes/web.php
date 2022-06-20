<?php

use Illuminate\Support\Facades\Route;

use LaravelReady\LicenseConnector\Services\ConnectorService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $licenseKey = '46fad906-bc51-435f-9929-db46cb4baf13';
    $licenseStatus = ConnectorService::validateLicense($licenseKey);

    return view('welcome', compact('licenseKey', 'licenseStatus'));
});
