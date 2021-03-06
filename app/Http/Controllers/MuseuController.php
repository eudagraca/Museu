<?php

namespace App\Http\Controllers;

use App\Models\Museu;
use Illuminate\Http\Request;

class MuseuController extends Controller
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
     * @param  \App\Models\Museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function show($museu)
    {
        return view('museu.'.$museu);
    }

    public function apresentacao($apresentacao)
    {
        if ($apresentacao == "apresentacao") {
            return view('apresentacao.details');
        }elseif($apresentacao == "modelo"){
            return view('apresentacao.modelo');
        }elseif($apresentacao == "organica"){
            return view('apresentacao.organica');
        }elseif($apresentacao == "missao"){
            return view('apresentacao.missao_valores');
        }else{
            return abort(404);
        }
    }

    public function edm()
    {
        return view('apresentacao.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function edit(Museu $museu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museu $museu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museu $museu)
    {
        //
    }
}
