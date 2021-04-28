<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\ComplaintResolution;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $roles =Role::find(1);
        return view('admin.mostrar', compact('denuncia', 'denunciado', 'denunciante', 'similares', 'usuarios', 'roles'));
    }

    public function update(Request $request, User $user){

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.denuncias')->with('info', 'Se dio de baja correctamente.');

    }

    public function store(Request $request){

        $request->validate([
            'resolution' => 'required'
        ]);

        $resolver = new ComplaintResolution();
        $resolver->resolution=$request->resolution;
        $resolver->resolution_date=now()->format('Y-m-d');
        $resolver->complaint_id=$request->id;
        $resolver->admin_id=Auth::user()->id;
        $resolver->save();


        return redirect()->route('admin.denuncias')->with('info', 'Se envio el mensaje correctamente.');

    }
}
