<?php

namespace App\Http\Controllers;

use App\Models\Destaque;
use Illuminate\Http\Request;

class DestaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('destaque.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destaque.create');
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
     * @param  \App\Models\Destaque  $destaque
     * @return \Illuminate\Http\Response
     */
    public function show(Destaque $destaque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destaque  $destaque
     * @return \Illuminate\Http\Response
     */
    public function edit(Destaque $destaque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destaque  $destaque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destaque $destaque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destaque  $destaque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destaque $destaque)
    {
        //
    }
}
