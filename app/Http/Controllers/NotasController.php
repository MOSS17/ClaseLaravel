<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index() {
        $notas = Notas::all(); //DB::table('notas')->get();
        return view('notas', ['notas' => $notas]);
    }

    public function agregar() {
        return view('agregar');
    }

    public function editar($id) {
        $nota = Notas::find($id); //DB::table('notas')->where('id', $id)->first();
        //return 'Aquí se van a editar las notas' .$id;
        return view('editar', ['nota' => $nota]);
    }

    public function crear(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
          ]);
          
        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content')
        ]);
        return redirect('/notas');
    }


    public function update(Notas $nota, Request $request) {
        
        $nota->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }

}
