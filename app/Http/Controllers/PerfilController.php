<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertPhoto;
use App\Models\Complaint;
use App\Models\Departament;
use App\Models\Qualification;
use App\Models\Township;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $userAuth=Auth::id(); 
        $calificacion = DB::table('qualifications')->select(DB::raw('SUM(qualification) / ((COUNT(qualification) * 5) / 100) as rating')) ->where('qualified',)->get() ;
        $calificacionUsers = DB::select('SELECT qualifications.id,qualifications.qualification,qualifications.commentary,qualifications.qualifier,qualifications.qualified,qualifications.created_at, users.name,  users.profile_photo_path FROM `qualifications` inner JOIN `users` on qualifications.qualifier = users.id WHERE qualifications.qualified= :id', ['id' => $perfil->id]);
       // $va = DB::select('SELECT * FROM `categories` where id  IN(SELECT category_id from `subscriptions` where user_id = :id)
        //', ['id' => $di]);
        
    
        return view('advert.perfiles', compact('calificacionUsers','userAuth','perfil', 'municipios', 'departamentos', 'anuncios', 'activos', 'fotos', 'mostrar', 'munis'));

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
        return redirect()->to('adverts/show/f?');
    }

    
    public function storeCalificacion(Request $request){
        $date = new Carbon();
        $qualification = new Qualification();
        $qualification->qualification = $request->rating;
        $qualification->commentary= $request->message;
        $qualification->qualifier=Auth::user()->id;
        $qualification->qualified=$request->qualified;
        $qualification->save();
        return redirect()->route('perfiles.show', $request->qualified);










            
    }
}
