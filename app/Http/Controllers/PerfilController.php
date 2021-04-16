<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertPhoto;
use App\Models\Complaint;
use App\Models\Departament;
use App\Models\Township;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    public function show(User $perfil){

        $municipios = Township::where('id', $perfil->township_id)->get();
        $departamentos = Departament::all();
        $anuncios = Advert::where('user_id', $perfil->id)->get();
        $activos = Advert::where('user_id', $perfil->id)
                        ->where('advert_status_id', 1)
                        ->latest('id')
                        ->get();
        $mostrar = Advert::where('user_id', $perfil->id)
                        ->where('advert_status_id', 1)
                        ->latest('id')
                        ->take(5)
                        ->get();
        $fotos = AdvertPhoto::all();
        $munis = Township::all();
        return view('advert.perfiles', compact('perfil', 'municipios', 'departamentos', 'anuncios', 'activos', 'fotos', 'mostrar', 'munis'));

    }

    public function store(Request $request){

        $request->validate([
            'message' => 'required'
        ]);


        $acusar = new Complaint();
        $acusar->date=now()->format('Y-m-d');
        $acusar->message=$request->message;
        $acusar->accuser=Auth::user()->id;
        $acusar->denounced=$request->idp;
        $acusar->save();

        //return $acusar;
        return redirect()->to('dashboard');
    }
}
