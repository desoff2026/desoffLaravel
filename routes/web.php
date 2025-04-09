<?php

use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('home');
});

Route::get('/nuestroProyecto', function () {
    return view('nuestroProyecto');
});

Route::get('/informacionEntidades', function () {
    return view('informacionEntidades');
});

Route::get('/formularioReporte', function () {
    return view('formularioReporte');
});

Route::get('/nuestroProyecto', function () {
    return view('nuestroProyecto');
});

Route::get('/iniciodSesion', function () {
    return view('iniciodSesion');
});