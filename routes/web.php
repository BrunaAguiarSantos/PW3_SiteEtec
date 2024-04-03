<?php

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

Route::get('SiteEtec', function () {
    return view('SiteEtec');
});

Route::get('Adm', function () {
    return view('Adm');
});

Route::get('Contabilidade', function () {
    return view('Contabilidade');
});

Route::get('DS', function () {
    return view('DS');
});

Route::get('Logistica', function () {
    return view('Logistica');
});

Route::get('RH', function () {
    return view('RH');
});

Route::get('ServJuridicos', function () {
    return view('ServJuridicos');
});

Route::get('HistoriaZL', function () {
    return view('HistoriaZL');
});

Route::get('Infra', function () {
    return view('Infra');
});

Route::get('PPG', function () {
    return view('PPG');
});

Route::get('MA', function () {
    return view('MA');
});

Route::get('RCE', function () {
    return view('RCE');
});

Route::get('APM', function () {
    return view('APM');
});

Route::get('CDC', function () {
    return view('CDC');
});

Route::get('Direcao', function () {
    return view('Direcao');
});

Route::get('Oportunidade', function () {
    return view('Oportunidade');
});

Route::get('Vestibulinho', function () {
    return view('Vestibulinho');
});
