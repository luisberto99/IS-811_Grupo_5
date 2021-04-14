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
use Illuminate\Support\Facades\DB;


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
        $photos = AdvertPhoto::where('advert_id',$id)->get();   
        
        Carbon::setLocale('es');
        
         $dat = new Carbon($user->created_at);
         
         $dat1= [$dat->getTranslatedMonthName(), $dat->year];
         $dat2 = new Carbon($advert->creation_date);
        

         $dat3=[$dat2->day, $dat->getTranslatedMonthName(), $dat2->year];
        

       
        

        return view('advert.show', compact('dat1','dat3', 'advert', 'category', 'coment','adProduct','currency','township','department','user','adsActive','AlladdsUser','photos'));


    }

    public function storeComment(Request $request){  #No esta completa - No es funcional

        $comment = new AdvertComment();
        
    }
}
