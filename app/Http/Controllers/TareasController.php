<?php
//namespace es la ruta donde se encuentra este archivo
namespace App\Http\Controllers;

// se traen todas las librerias y paquetes necesarios
// Reques es para trabajar con informacion que se trabaja desde un formulario
use Illuminate\Http\Request;

class TareasController extends Controller
{
    //implementando la funcion que se especifico en la Ruta

    public function buscar()
    {
       echo "Esoy buscando una Tareas desde Tareas coltroller";
    }
}
