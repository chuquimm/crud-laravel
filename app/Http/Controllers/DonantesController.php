<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;

class DonantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donantes = Donante::orderBy('id', 'ASC')->paginate(5);
        return view('admin.donantes.index')->with('donantes', $donantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donante = new Donante($request->all());

        $donante->password = bcrypt($donante->password);
        if ($request->hasFile('foto')) {
            $donante->foto = $request->file('foto')->store('public');
        }

        $donante->save();
        
        return redirect()->route('donantes.index');
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
        $donante = Donante::find($id);
        return view('admin.donantes.edit')->with('donante', $donante); 
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
        
        $donante = Donante::find($id);
        
        if ($request->hasFile('foto')) {
            $donante->foto = $request->file('foto')->store('public');
        }

        $donante->nombre = $request->nombre;
        $donante->apellido = $request->apellido;
        $donante->correo = $request->correo;
        $donante->dni = $request->dni;
        $donante->celular = $request->celular;
        $donante->fecha = $request->fecha;
        $donante->genero = $request->genero;
        $donante->sangre = $request->sangre;
        $donante->factor = $request->factor;
        $donante->lugar = $request->lugar;
        $donante->save();

        return redirect()->route('donantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donante = Donante::find($id);
        $donante->delete();
        return redirect()->route('donantes.index');
    }
}
