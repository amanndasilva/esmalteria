<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cliente = Cliente::all();
        $cliente = Cliente::where('id_cliente','>=',3)->get();

        return view('cliente',compact('cliente'));

    }

    public function indexApi ()
    {
        $cliente = Cliente::all();
        return $cliente;
    }

    public function apiNome ()
    {
        $cliente = Cliente::where('nomeCliente' , 'Carlos Pereira')->get();
        return $cliente;
    }

    public function apiId ()
    {
        $cliente = Cliente::where('id_cliente', 1)->get();
        return $cliente;
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
        $cliente = new Cliente();
            $cliente -> nomeCliente = $request -> txnomeCliente;
            $cliente -> emailCliente = $request -> txEmail;
            $cliente -> telefoneCliente = $request -> txTelefone;
            $cliente -> endereco = $request -> txEndereco;

            $cliente -> save ();

            return redirect ('/cliente');
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
