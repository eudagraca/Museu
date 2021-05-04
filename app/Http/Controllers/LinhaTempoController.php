<?php

namespace App\Http\Controllers;

use App\Models\LinhaTempo;
use Illuminate\Http\Request;

class LinhaTempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhasTempo = LinhaTempo::all();
        return view('linha_do_tempo.index', compact('linhasTempo'));
    }

    public function linhaDoTempo()
    {
        $anos = LinhaTempo::select('ano')->groupBy('ano')->get();

        return view('linha_do_tempo.linha', compact('anos'));
    }

    public function historia()
    {
        return view('pages.historia');
    }

    public function personalidades()
    {
        return view('pages.personalidades');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linha_do_tempo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y', strtotime($request->ano));
        $linhaTempo =   LinhaTempo::create([
            'ano' => $year,
            'nota' => $request->nota
        ]);
        return redirect(route('linhaTempo.index'))->with('success', 'Linha do tempo registada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function show($ano)
    {
        $linhasTempo = LinhaTempo::where('ano', $ano)->get();
        return view('linha_do_tempo.details', compact(['linhasTempo', 'ano']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function edit($linhaTempo)
    {
        $linhaTempo = LinhaTempo::findOrFail($linhaTempo);
        return view('linha_do_tempo.edit', compact('linhaTempo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $linhaTempo)
    {
        $linhaTempo = LinhaTempo::findOrFail($linhaTempo);
        $linhaTempo->ano = $request->ano;
        $linhaTempo->nota = $request->nota;
        $linhaTempo->save();
        return redirect(route('linhaTempo.index'))->with('success', 'Actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LinhaTempo $linhaTempo)
    {
        //
    }
}
