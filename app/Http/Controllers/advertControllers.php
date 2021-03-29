<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

use App\Models\Category;
use App\Models\Advert;
use App\Models\User;
use App\View\Components\advert as ComponentsAdvert;
use Illuminate\Support\Facades\DB;

class advertControllers extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $idUser = auth()->user()->id;
        //$adverts = Advert::find($idUser);
        //$user = User::paginate();
    
        //$adverts = DB::select('SELECT * FROM adverts WHERE user_id = :id', ['id' => $idUser]);
        $adverts = DB::table('adverts')->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
                                        ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
                                        ->join('townshipes','townshipes.id','=','adverts.township_id')
                                        ->join('departaments','departaments.id','=','townshipes.departament_id')
                                        ->select('adverts.id as adverts_id', 'adverts.*','products_adverts.id as product_id', 'products_adverts.*','townshipes.name as township','departaments.name as departament')
                                        ->where('adverts.user_id', '=', $idUser)
                                        ->paginate();

        return view("components.adverts", ['idUser' => $idUser,'adverts' => $adverts]);
    }



public function filter(Request $request){
    
  

    $idUser = auth()->user()->id;
    $adverts = DB::table('adverts')->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
    ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
    ->join('townshipes','townshipes.id','=','adverts.township_id')
    ->join('departaments','departaments.id','=','townshipes.departament_id')
    ->select('adverts.id as adverts_id', 'adverts.*','products_adverts.id as product_id', 'products_adverts.*','townshipes.name as township','departaments.name as departament')
    ->when($request->category,function ($query, $role){
            return $query->where('category_id', $_GET['category']);
        })
    ->when($request->depto,function ($query, $role){
            return $query->where('departaments.id', $_GET['depto']);
        })
    ->where('adverts.user_id', '=', $idUser)
    ->paginate();



    return view("components.adverts", ['idUser' => $idUser,'adverts' => $adverts]);
    }
    public function edit($anuncio)
    {
        $anuncioAct = Advert::find($anuncio);
        $anuncioAct->advert_status_id=2;
        $anuncioAct->update();
        
        return redirect()->to('adverts/show');
    }


}


