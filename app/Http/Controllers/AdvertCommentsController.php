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



class AdvertCommentsController extends Controller
{
       public function storeComment(Request $request){  #No esta completa - No es funcional

        $comment = new AdvertComment();
        $comment->commentary = $request->commentary;
        $comment->user_id = $request->user_id;
        $comment->advert_id = $request->advert_id;

        $comment->save();
        return response();
        
    }
}
