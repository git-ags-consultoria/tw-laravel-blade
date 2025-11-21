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

Route::get('/exibicao/json', function () {
    return view('exemplos.exibicao_json')->with(
        [
            'posts'=>
            [
                'titulo' => 'Novidades do Laravel',
                'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales lectus quis vulputate lacinia. Pellentesque non neque ut massa tempus tincidunt non at turpis. Phasellus convallis pharetra tincidunt. Donec felis risus, fermentum in varius quis, condimentum cursus leo. Donec ex erat, tempor vitae scelerisque ac, viverra vel lectus. Pellentesque ut erat venenatis, dignissim tortor ut, commodo ligula. Aliquam erat volutpat. Pellentesque vehicula ex at magna convallis aliquam.'
            ],
            [
                'titulo' => 'Novidades do Tailwind',
                'conteudo' => 'Praesent tempus sapien nulla, eget rutrum ex commodo et. Donec mauris nisl, tincidunt sed malesuada ut, volutpat sodales sapien. Nullam posuere, urna vel bibendum aliquam, ex felis condimentum lectus, ac faucibus augue massa vitae mauris. Sed tempus felis sed velit convallis, vitae laoreet quam placerat. Donec fringilla tincidunt nisi, et laoreet orci vestibulum tempus. Cras pharetra pretium sem, vitae dignissim ligula volutpat a. Proin a dapibus tellus. Praesent in mollis ipsum.

'
            ]
        ]
    );
});
