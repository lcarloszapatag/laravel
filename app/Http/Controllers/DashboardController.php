<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Test,Usuario};
use DB;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if(DB::connection()->getDatabaseName()) { echo "connected successfully to database ".DB::connection()->getDatabaseName(); };
        DB::enableQueryLog();
        $log = DB::getQueryLog();
        var_dump($log);
        */
        $todos=Test::all();
                 
        var_dump($todos);
        foreach ($todos as $t){
            echo $t->nombre." ". $t->numero."<br/>";
        }
        die();
        //return view('dashboard')->compact('todos');
        //return view('dashboard');
        //$porId = Test::find(1);// find solo es para buscar por el Id y no necesita el metodo get();
        
        //$where = Test::where('numero','>',5)->get();// traigame todos los numeros mayores a 5
        //$where2 = Test::where('numero','>',10)->where ('aleatorio','<',50)->get();// concatenando la consulta
        //var_dump($where2);
       
      
        //$count = Test::count();// optiene la sumatoria de todos los registros 
        //$max= Test::max('aleatorio');
        //$like = Test::where('nombre','like','A%')->get();
        //$between =Test::whereBetween('numero',[5,15])->get(); 
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
