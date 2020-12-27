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
        //
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
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function show(LinhaTempo $linhaTempo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function edit(LinhaTempo $linhaTempo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LinhaTempo  $linhaTempo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LinhaTempo $linhaTempo)
    {
        //
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
