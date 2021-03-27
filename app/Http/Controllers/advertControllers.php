<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class advertControllers extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($idUser)
    {

        //$adverts = Advert::find($idUser);
        //$user = User::paginate();
    
        //$adverts = DB::select('SELECT * FROM adverts WHERE user_id = :id', ['id' => $idUser]);
        $adverts = DB::table('adverts')->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
                                        ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
                                        ->join('townshipes','townshipes.id','=','adverts.township_id')
                                        ->join('departaments','departaments.id','=','townshipes.departament_id')
                                        ->select('adverts.*', 'products_adverts.*','townshipes.name as township','departaments.name as departament')
                                        ->where('adverts.user_id', '=', $idUser)
                        ->paginate();

        //return $anuncios;
        return view("components.adverts", ['idUser' => $idUser,'adverts' => $adverts]);
    }
}
