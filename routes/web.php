<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    
    $nome  ="João Pedro";
    $idade=22;
    $profissao="Programdor WEB-Back-End";
    $arr=[1,2,3,4,5];
    $dados=['nome'=>$nome,'idade'=>$idade,'profissao'=>$profissao,'arr'=>$arr];

    



    return view('welcome',$dados);
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/products',function(){

    $busca= request('busca');

    return view ('products',['busca'=>$busca]);
});

Route::get('/products_test/{id?}',function($id=null){
    return view ('productId',['id'=>$id]);
});


