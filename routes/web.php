<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/*
Route::get('/passagem/dados', function () {
    return view('exemplos.passagem_de_dados', [
      'nome' => 'TreinaWeb',
      'descricao' => 'A melhor escola de prrogramação'
    ]);
});
*/

Route::get('/passagem/dados', function () {
    return view('exemplos.passagem_de_dados')->with(
        [
            'nome' => 'TreinaWeb',
            'descricao' => 'A melhor escola de prrogramação'
        ]
    );
});
