<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertComment;
use App\Models\AdvertPhoto;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Departament;
use App\Models\Product;
use App\Models\Township;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdvertController extends Controller
{
    public function show($id){
        $advert = Advert::find($id);
        $category = Category::find($advert->category_id);
        $category = $category->name;
        $adProduct = Product::where('advert_id',$id)->first(); 
        $currency = Currency::find($adProduct->currency_id);
        $currency = $currency->currency_type;
        $township = Township::find($advert->township_id);
        $department = Departament::find($township->departament_id);
        $township = $township->name;
        $department = $department->name;
        $user = User::find($advert->user_id);
        $AlladdsUser = Advert::where('user_id',$user->id )->get()->count();
        $adsActive = Advert::where('user_id',$user->id )->where('advert_status_id', 1)->get()->count();
        $coment=  AdvertComment::where('advert_id',$id)->whereRaw('parent_id = id')-> get();
        $photo = AdvertPhoto::where('advert_id',$id)->get();    
       
        
        

        return view('advert.show', compact('advert', 'category', 'coment','adProduct','currency','township','department','user','adsActive','AlladdsUser','photo'));


    }

    public function storeComment(Request $request){  #No esta completa - No es funcional

        $comment = new AdvertComment();
        
    }
}
