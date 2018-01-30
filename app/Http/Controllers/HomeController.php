<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->inRandomOrder()->get();

        return view('home.index', compact('registros'));
    }

    public function produto($id = null)
    {
        if( !empty($id) ) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
                ])->first();

            if( !empty($registro) ) {
                return view('home.produto', compact('registro'));
            }
        }
        return redirect()->route('index');
    }

    public function cdsPorGenero($genero)
    {
        $registros = Produto::where([
            'genero'=>$genero
        ])->get();

        return view('home.index', compact('registros'));
    }

    public function busca()
    {
        $categoria = Input::get('categoria');
        $chave = Input::get('chave');

        $registros = Produto::where($categoria,'like',$chave.'%')->get();

        return view('home.index', compact('registros'));
    }

}