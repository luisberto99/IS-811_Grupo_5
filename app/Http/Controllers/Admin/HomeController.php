<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\AdvertComplaint;
use App\Models\AdvertResolution;
use App\Models\Complaint;
use App\Models\ComplaintResolution;
use App\Models\ModelHasRole;
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
        $anunciodenuncia = AdvertComplaint::all();
        $anuncios = Advert::all();
        return view('admin.denuncias', compact('denuncia', 'usuarios', 'anunciodenuncia','anuncios'));
    }

    public function mostrar(Complaint $denuncia){
        $denunciante = User::where('id', $denuncia->accuser)->get();
        $denunciado = User::where('id', $denuncia->denounced)->get();
        $similares = Complaint::where('denounced', $denuncia->denounced)
                                      ->where('id', '!=', $denuncia->id)           
                                      ->get();
        $usuarios = User::all();
        $roles =Role::find(1);
        $permisos = ModelHasRole::where('role_id', 1)
                                  ->where('model_id', $denuncia->denounced)  
                                  ->get();
        return view('admin.mostrar', compact('denuncia', 'denunciado', 'denunciante', 'similares', 'usuarios', 'roles', 'permisos'));
    }

    public function mostrardenuncia(AdvertComplaint $denuncia){
        $denunciante = User::where('id', $denuncia->accuser)->get();
        $adenunciado = Advert::where('id', $denuncia->advert_id)->get();
        $denunciado = User::all();
        $similares = AdvertComplaint::where('advert_id', $denuncia->advert_id)
                                      ->where('id', '!=', $denuncia->id)           
                                      ->get();
        $usuarios = User::all();
        $anuncios = Advert::all();
        return view('admin.mostrardenuncia', compact('denuncia', 'adenunciado', 'denunciado', 'denunciante', 'similares', 'usuarios', 'anuncios'));
    }

    public function update(Request $request, User $user){

        $request->validate([
            'resolution' => 'required'
        ]);

        $user->roles()->sync($request->roles);
        $resolucion = new ComplaintResolution();
        $resolucion->resolution=$request->resolution;
        $resolucion->resolution_date=now()->format('Y-m-d');
        $resolucion->complaint_id=$request->idc;
        $resolucion->admin_id=Auth::user()->id;
        $resolucion->save();

        return redirect()->route('admin.denuncias')->with('info', 'Se dio de baja correctamente.');

    }

    public function updateanuncio(Request $request, $advert){
        $request->validate([
            'resolution' => 'required'
        ]);

        $resolver = new AdvertResolution();
        $resolver->resolution=$request->resolution;
        $resolver->resolution_date=now()->format('Y-m-d');
        $resolver->complaint_id=$request->id;
        $resolver->admin_id=Auth::user()->id;
        $resolver->save();

        $anuncioAct = Advert::find($advert);
        $anuncioAct->advert_status_id=2;
        $anuncioAct->update();


        return redirect()->route('admin.denuncias')->with('info', 'Se dio de baja el anuncio correctamente.');

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

    public function denunciastore(Request $request){

        $request->validate([
            'resolution' => 'required'
        ]);

        $resolver = new AdvertResolution();
        $resolver->resolution=$request->resolution;
        $resolver->resolution_date=now()->format('Y-m-d');
        $resolver->complaint_id=$request->id;
        $resolver->admin_id=Auth::user()->id;
        $resolver->save();


        return redirect()->route('admin.denuncias')->with('info', 'Se envio el mensaje correctamente.');

    }
}
