<?php

require_once "../autoload.php";

use Lib\Route;

Route::get('/',function(){
    echo "Hola mundo";
});

Route::get("/contacto",function(){
    echo "Hola desde la pagina de contacto";
});

Route::get("/acercaDe",function(){
    echo "Hola desde la pagina de acerca de";
});