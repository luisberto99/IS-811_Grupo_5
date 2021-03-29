<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class advertController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        //return view("advert.advert")-> with("id", $id);

        compact('id');
        return view("components.advert", compact('id'));
        
    }
}
