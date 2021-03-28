<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertComment;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Departament;
use App\Models\Product;
use App\Models\Township;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdvertController extends Controller
{
    public function show($id){
        $advert = Advert::find($id);
        $category = Category::find($advert->category_id);
        $adProduct = Product::where('advert_id',$id)->first(); 
        $currency = Currency::find($adProduct->currency_id);
        $township = Township::find($advert->township_id);
        $department = Departament::find($township->departament_id);
      
        $comentQuestion =  AdvertComment::where('advert_id',$id)->whereRaw('parent_id = id')-> get();
        $comentAnswers = AdvertComment::where('advert_id',$id)->whereRaw('parent_id != id')-> get();
        
    
       
        return view('advert.show', compact('advert', 'category', 'coment'));


    }
}
