<?php

namespace App\Http\Controllers;

use App\Models\InformacaoInstituicional;
use Illuminate\Http\Request;

class InformacaoInstituicionalController extends Controller
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
        return view('pages.institucional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformacaoInstituicional  $informacaoInstituicional
     * @return \Illuminate\Http\Response
     */
    public function show(InformacaoInstituicional $informacaoInstituicional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformacaoInstituicional  $informacaoInstituicional
     * @return \Illuminate\Http\Response
     */
    public function edit(InformacaoInstituicional $informacaoInstituicional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformacaoInstituicional  $informacaoInstituicional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacaoInstituicional $informacaoInstituicional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformacaoInstituicional  $informacaoInstituicional
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacaoInstituicional $informacaoInstituicional)
    {
        //
    }
}
