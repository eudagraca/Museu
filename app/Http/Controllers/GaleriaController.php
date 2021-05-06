<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galeria = Galeria::all();
        return view('galeria.user.old_index');
    }

    public function indexMain()
    {
        $galerias = Galeria::all();
        return view('galeria.index', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->imagem[0]->extension();

        if ($request->imagem !=null) {
            for ($i = 0; $i < count($request->imagem); $i++) {
                if ($request->imagem[$i] != null) {
                    $galeria = new Galeria();
                    $imageName = trim(Str::random(10)) . '_' . time() . '.' . $request->imagem[$i]->extension();
                    $request->imagem[$i]->move(public_path('images/galeria'), $imageName);
                    $galeria->imagem = $imageName;
                    $galeria->descricao = $request->descricao[$i];
                    $galeria->ponto = $request->ponto[$i];
                    $galeria->save();
                }
            }
            return redirect()->back()->with('success', 'Adicionada com sucesso');
        }
        return redirect()->back()->with('error', 'Nenhuma imagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show($galeria)
    {
        if ($galeria == 'geracao') {
            return view('galeria.details.geracao');
        } elseif ($galeria == 'comercial') {
            return view('galeria.details.comercial');
        } elseif ($galeria == 'distribuicao') {
            return view('galeria.details.distribuicao');
        } elseif ($galeria == 'transporte') {
            return view('galeria.details.transporte');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy($galeria)
    {
        $galeria = Galeria::findOrFail($galeria);
        return redirect(route('galeria.indexMain'))->with('success', 'Imagem apagada');
    }
}
