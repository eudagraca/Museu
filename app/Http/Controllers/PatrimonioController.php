<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatrimonioRequest;
use App\Http\Requests\PatrimonioUpdate;
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
        $patrimonios = Patrimonio::all();
        return view('patrimonio.index', compact('patrimonios'));
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
    public function store(Request $request)
    {
        $imageName = trim($request->titulo) . '_' . time() . '.' . $request->imagem->extension();
        $request->imagem->move(public_path('images/patrimonio'), $imageName);
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
        $patrimonios = Patrimonio::where('zona', '=', $patrimonio)->get();
        // return $patrimonios;
        return view('patrimonio.lista', compact(['patrimonios', 'patrimonio']));
    }

    public function details($patrimonio)
    {
        $patrimonio = Patrimonio::findOrFail($patrimonio);
        return view('patrimonio.details', compact('patrimonio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrimonio $patrimonio)
    {
        return view('patrimonio.edit', compact('patrimonio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(PatrimonioUpdate $request, Patrimonio $patrimonio)
    {
        if ($request->imagem != null) {
            if ($request->hasFile('imagem')) {
                $imageName = trim($request->titulo) . '_' . time() . '.' . $request->imagem->extension();
                $request->imagem->move(public_path('images/patrimonio'), $imageName);
                $patrimonio->imagem =  $imageName;
            }
        }
        $patrimonio->fill($request->except('imagem'));
        $patrimonio->titulo = $request->titulo;
        $patrimonio->save();
        return redirect(route('patrimonio.index'))->with('success', 'Actualizado com sucesso');
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
