<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index') ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->nombre = $request->get('nombre');
        $clientes->tipo_documento = $request->get('tipo');
        $clientes->documento = $request->get('documento');
        $clientes->estado = $request->get('estado');
        $clientes->direccion = $request->get('direccion');
        $clientes->pais = $request->get('pais');
        $clientes->departamento = $request->get('departamento');
        $clientes->ciudad = $request->get('ciudad');
        $clientes->barrio = $request->get('barrio');
        $clientes->celular = $request->get('celular');
        $clientes->fecha_nacimiento = $request->get('fechaNacimiento');
        $clientes->genero = $request->get('genero');
        $clientes->email = $request->get('email');

        $clientes->save();

        return redirect('/clientes');
        
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
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente', $cliente);
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
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->get('nombre');
        $cliente->tipo_documento = $request->get('tipo');
        $cliente->documento = $request->get('documento');
        $cliente->estado = $request->get('estado');
        $cliente->direccion = $request->get('direccion');
        $cliente->pais = $request->get('pais');
        $cliente->departamento = $request->get('departamento');
        $cliente->ciudad = $request->get('ciudad');
        $cliente->barrio = $request->get('barrio');
        $cliente->celular = $request->get('celular');
        $cliente->fecha_nacimiento = $request->get('fechaNacimiento');
        $cliente->genero = $request->get('genero');
        $cliente->email = $request->get('email');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
