<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

use function PHPSTORM_META\map;

class GaleriaController extends Controller
{
    public $imagesPath = '';
    public $thumbnailPath = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeria = Galeria::all();
        // return view('galeria.user.old_index');
        return view('galeria.user.index', compact('galeria'));
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
     * @function CreateDirectory
     * create required directory if not exist and set permissions
     */
    public function createDirecrotory()
    {
        $paths = [
            'image_path' => public_path('images/galeria/image_path'),
            'thumbnail_path' => public_path('images/galeria/thumbnail_path')
        ];
        foreach ($paths as $key => $path) {
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }
        }
        $this->imagesPath = $paths['image_path'];
        $this->thumbnailPath = $paths['thumbnail_path'];
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

        $this->validate($request, [
            'imagem.*' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg|max:10000',
            [
                'imagem.*.required' => 'Por favor, insira as imagens',
                'imagem.*.mimes' => 'Somente imagens em formato JPEG,PNG,JPG,GIF e SVG são permitidas',
                'imagem.*.max' => 'Desculpe! O tamanho máximo permitido sao 10 Megabytes'
            ]
        ]);

        if($request->hasFile('imagem')){

            $this->createDirecrotory();

            if ($request->imagem != null) {
                for ($i = 0; $i < count($request->imagem); $i++) {
                    if ($request->imagem[$i] != null) {
                        $galeria = new Galeria();
                        $image = $request->imagem[$i];
                        $imgFileName = trim(Str::random(10)) . '_' . time() . '.' . $request->imagem[$i]->extension();
                        
                        $imgFile = Image::make($image->getRealPath());

                        $thumbnailPath = $this->thumbnailPath.'/'.$request->ponto[$i].'/';

                        $imgFile->resize(300, 300, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($thumbnailPath.$imgFileName);

                        $imagesPath = $this->imagesPath.'/'.$request->ponto[$i];

                        $image->move($imagesPath, $imgFileName);

                        $galeria->imagem = $imgFileName;
                        $galeria->descricao = $request->descricao[$i];
                        $galeria->ponto = $request->ponto[$i];
                        $galeria->save();
                    }
                }
                return redirect()->back()->with('success', 'Adicionada com sucesso');
            }
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
