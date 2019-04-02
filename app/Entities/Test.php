<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
// aqui debe estar en singular 
class Test extends Model
{
    //normalmente como se llama el modelo la tabla de llama igual pero en plurar, 
    //cuando esto cambia, se tiene que crear una varible protegida como se muestra a cotinuacion

    protected $table ='works';
}