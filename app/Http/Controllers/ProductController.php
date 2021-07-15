<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){

    $busca= request('busca');
    return view ('products',['busca'=>$busca]);
   }

   public function exibeProduto($id=null){
    return view ('productId',['id'=>$id]);
   }
}
