<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertPhoto;
use App\Models\Departament;
use App\Models\Township;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('advert.perfiles', compact('perfil', 'municipios', 'departamentos', 'anuncios', 'activos', 'fotos', 'mostrar'));

    }
}
