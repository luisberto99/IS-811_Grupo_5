<?php

namespace App\Http\Livewire;

use App\Models\Advert;
use App\Models\Category;
use App\View\Components\advert as ComponentsAdvert;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class LandingCarrousels extends Component
{

    public $categoria;

    
    public function render()
    {
        $categories = '[{"id":"0","name":"Ultimas publicaciones"}]';
        $categories = json_decode($categories);
        $adverts = DB::table('adverts')
        ->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
        ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
        ->join('townshipes','townshipes.id','=','adverts.township_id')
        ->join('departaments','departaments.id','=','townshipes.departament_id')
        ->join('users','adverts.user_id','users.id')
        ->select('adverts.id as adverts_id', 'adverts.*', 'users.name as user_name','products_adverts.id as product_id', 'products_adverts.*','townshipes.name as township','departaments.name as departament')
        ->where('advert_status_id',1)
        ->orderBy('creation_date','desc')
        ->limit(20)->get();

        return view('livewire.landing-carrousels',compact('categories','adverts'));
    }

    public static function categoria($categoria){
        $categories = DB::table('categories')->select()->where('id', $categoria)->get();
        $adverts = DB::table('adverts')
        ->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
        ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
        ->join('townshipes','townshipes.id','=','adverts.township_id')
        ->join('departaments','departaments.id','=','townshipes.departament_id')
        ->join('users','adverts.user_id','users.id')
        ->select('adverts.id as adverts_id', 'adverts.*', 'users.name as user_name','products_adverts.id as product_id', 'products_adverts.*','townshipes.name as township','departaments.name as departament')
        ->where('category_id',$categoria)
        ->where('advert_status_id',1)
        ->orderBy('creation_date','desc')
        ->limit(10)->get();

        return view('livewire.landing-carrousels',compact('categories','adverts'));
    }

    
}
