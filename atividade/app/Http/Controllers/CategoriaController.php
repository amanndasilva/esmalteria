<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categoria = Categoria::all();
        $categoria = Categoria::where('id_categoria',3)->get();

        return view('categoria',compact('categoria'));
        
    }

    public function indexApi ()
    {
        $categoria = Categoria::all();
        return $categoria;
    }

    public function apiNome ()
    {
        $categoria = Categoria::where('categoria' , 'Gel')->get();
        return $categoria;
    }

    public function apiId ()
    {
        $categoria = Categoria::where('id_categoria', 2)->get();
        return $categoria;
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
        //Instanciar uma nova categoria (um objeto)
        $categoria = new Categoria();
            //nome do objeto //nome do atributo na tabela //nome do campo que o usuário irá diigitar 
            $categoria -> categoria = $request -> txCategoria;
                                        //parametro da função: solicita

            $categoria -> save (); //cria automaticamente um insert para ser guardado no banco 

            return redirect ('/categoria'); //redireciona para a mesma página após salvar
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
