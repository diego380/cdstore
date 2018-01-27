<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->inRandomOrder()->get();

        return view('home.index', compact('registros','atributosGeneros'));
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

        return view('home.index', compact('registros','atributosGeneros'));
    }

}
