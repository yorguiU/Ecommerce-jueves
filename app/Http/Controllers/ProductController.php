<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('products.index');
    }

    function create(){
         return "FORMULARIO DE CREACION DE PRODUCTOS:";
    }

    function show ($id, $category = null){
        if ($category == null){
        return "Detalle de cada producto: " . $id ;
    }else{
        return "Detalle de cada producto: " . $id . " de la categoria: " . $category;
    }
    }
}
