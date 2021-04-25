<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function show(){
        $denuncia = Complaint::all();
        $usuarios = User::all();
        return view('admin.denuncias', compact('denuncia', 'usuarios'));
    }

    public function mostrar(Complaint $denuncia){
        $denunciante = User::where('id', $denuncia->accuser)->get();
        $denunciado = User::where('id', $denuncia->denounced)->get();
        $similares = Complaint::where('denounced', $denuncia->denounced)
                                      ->where('id', '!=', $denuncia->id)           
                                      ->get();
        $usuarios = User::all();
        return view('admin.mostrar', compact('denuncia', 'denunciado', 'denunciante', 'similares', 'usuarios'));
    }
}
