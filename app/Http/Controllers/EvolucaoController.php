<?php

namespace App\Http\Controllers;

use App\Models\Evolucao;
use Illuminate\Http\Request;

class EvolucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evolucao  $evolucao
     * @return \Illuminate\Http\Response
     */
    public function show($evolucao)
    {
        return view('pages.evolucao');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evolucao  $evolucao
     * @return \Illuminate\Http\Response
     */
    public function edit(Evolucao $evolucao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evolucao  $evolucao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evolucao $evolucao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evolucao  $evolucao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evolucao $evolucao)
    {
        //
    }
}
