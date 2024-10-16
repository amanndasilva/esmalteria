<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$fornecedor = Fornecedor::all();
        $fornecedor = Fornecedor::where('id_fornecedor','>',0)->orderBy('nomeFornecedor','asc')->get();

        return view('fornecedor',compact('fornecedor'));
    }

    public function apiNome ()
    {
        $fornecedor = Fornecedor::where('nomeFornecedor' , 'Brilho Total Cosméticos')->get();
        return $fornecedor;
    }

    public function indexApi ()
    {
        $fornecedor = Fornecedor::all();
        return $fornecedor;
    }

    public function apiId ()
    {
        $fornecedor = Fornecedor::where('id_fornecedor', 3)->get();
        return $fornecedor;
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
        $fornecedor = new Fornecedor();
            $fornecedor -> nomeFornecedor = $request -> txFornecedor;
            $fornecedor -> cnpj = $request -> txCnpj;

            $fornecedor -> save ();

            return redirect ('/fornecedor');
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
