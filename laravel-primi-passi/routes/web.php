<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $info =[
        "ciao",
        "sono",
        "un'array"
    ];

    return view('index',[
        "infos"=>$info
    ]);
});
