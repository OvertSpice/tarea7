<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\MateriasController;
use Illuminate\Support\Facades\Storage;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['materias']=Materias::paginate(5);
        return view('materias.index', $datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosMaterias = request()->except('_token');
        materias::insert($datosMaterias);
        return response()->json($datosMaterias);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materias=materias::findOrFail($id);
        return view('materias.edit', compact('materias') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMaterias=request()->except('_token','_method');
        Materias::where('id','=',$id)->update($datosMaterias);

        $materias=materias::findOrFail($id);
        return view('materias/edit', compact('materias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materias=materias::findOrFail($id);
        materias::destroy($id);
        return redirect('materias');
    }
}
