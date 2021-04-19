<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatrimonioRequest;
use App\Models\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patrimonio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatrimonioRequest $request)
    {
        $imageName = trim($request->titulo) . '_' . time() . '.' . $request->imagem->extension();

        $request->imagem->move(public_path('images'), $imageName);

        $patrimonio = new Patrimonio();
        $patrimonio->fill($request->except('imagem'));
        $patrimonio->titulo = $request->titulo;
        $patrimonio->imagem =  $imageName;
        $patrimonio->save();
        return redirect()->back()->with('success', 'Patrimonio adiconado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show($patrimonio)
    {
        // $patrimonios = Patrimonio::where('tipo', '=', $patrimonio)->get();
        return view('patrimonio.' . $patrimonio);

        // return view('patrimonio.', compact('patrimonios'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrimonio $patrimonio)
    {
        //
    }
}
