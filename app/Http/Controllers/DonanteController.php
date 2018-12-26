<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;

class DonanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donante = Donante::orderBy('Id', 'DESC')->paginate(3);
        return view('Donante.index', compact('donantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'dni'=>'required',
            'celular'=>'required',
            'fecha'=>'required',
            'genero'=>'required',
            'sangre'=>'required',
            'factor'=>'required',
            'lugar'=>'required',
            'foto'=>'required',
            'password'=>'required'
        ]);
        Donante::create($request->all());
        return redirect()->route('donante.index')->with('success', 'Se registro al donante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donante=Donante::find($id);
        return view('donante.show', compact('donantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donante=donante::find($id);
        return view('donante.edit',compact('donante'));
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
        $this->validate($request,[
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'dni'=>'required',
            'celular'=>'required',
            'fecha'=>'required',
            'genero'=>'required',
            'sangre'=>'required',
            'factor'=>'required',
            'lugar'=>'required',
            'foto'=>'required',
            'password'=>'required'
        ]);

        donante::find($id)->update($request->all());
        return redirect()->route('donante.index')->with('success','Donante se actualizo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donante::find($id)->delete();
        return redirect()->route('donante.index')->with('success', 'Se elimino registro del donante');
    }
}
