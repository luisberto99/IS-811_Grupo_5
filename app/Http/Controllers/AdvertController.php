<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertComment;
use App\Models\AdvertPhoto;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Departament;
use App\Models\Product;
use App\Models\Qualification;
use App\Models\Township;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class AdvertController extends Controller
{
    public function show($id){
        $advert = Advert::find($id);
        
        $category = Category::find(($advert->category_id));
        $category = $category->name;
        $adProduct = Product::where('advert_id',$id)->first(); 
        $currency = Currency::find($adProduct->currency_id);
        $currency = $currency->currency_type;
        $township = Township::find($advert->township_id);
        $department = Departament::find($township->departament_id);
        $township = $township->name;
        $department = $department->name;
        $user = User::find($advert->user_id);
        $townshipUser = Township::find($user->township_id);
        $departmentUser = Departament::find($townshipUser->departament_id);
        $townshipUser = $townshipUser->name;
        $departmentUser = $departmentUser->name;
        $AlladdsUser = Advert::where('user_id',$user->id )->get()->count();
        $adsActive = Advert::where('user_id',$user->id )->where('advert_status_id', 1)->get()->count();
        $coment=  AdvertComment::where('advert_id',$id)->orderByDesc('created_at')->limit(3)->get();
        $coment2=  AdvertComment::where('advert_id',$id)->orderByDesc('created_at')->get();
        $photos = AdvertPhoto::where('advert_id',$id)->get(); 
        $userAuth=Auth::id(); 
        
        
        // valoracion
        $val = DB::table('qualifications')->select(DB::raw('SUM(qualification) / ((COUNT(qualification) * 5) / 100) as rating')) ->where('qualified',$user->id)->get() ;
        
        
           
        Carbon::setLocale('es');
        
         $dat = new Carbon($user->created_at);
         
         $userDt= [$dat->getTranslatedMonthName(), $dat->year];
         $dat2 = new Carbon($advert->creation_date);     

         $advertDt=[$dat2->day, $dat->getTranslatedMonthName(), $dat2->year];
        
         
        
       
        

        return view('advert.show', compact('coment2','userAuth','val','townshipUser','departmentUser','userDt','advertDt', 'advert', 'category', 'coment','adProduct','currency','township','department','user','adsActive','AlladdsUser','photos'));


    }

    public function storeComment(Request $request){  #No esta completa - No es funcional
        
        $date = new Carbon();
        $comment = new AdvertComment();
        $comment->commentary = $request->commentary;
        $comment->user_id = $request->user_id;
        $comment->advert_id = $request->advert_id;
        $comment->creation_date= $date->format('Y-m-d'); 
        $comment->parent_id= $request->parent_id;
        $comment->save();
        
        return redirect()->route('advert.show',$request->advert_id);
    
    }
}
