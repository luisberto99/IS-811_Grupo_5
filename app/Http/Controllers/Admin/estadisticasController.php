<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departament;
use App\View\Components\advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.estadisticas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function general(){
        return view('admin.estadistica.general');
    }

    public function usuarios(){

        $departamentos = DB::table('users')->select(DB::raw('departaments.id, COUNT(*) AS numero_usuarios'))
        ->join('townshipes','townshipes.id', 'users.township_id')
        ->join('departaments','departaments.id', 'townshipes.departament_id')
        ->groupBy('departaments.id')
        ->orderBy('numero_usuarios','asc')
        ->get();
        return view('admin.estadistica.usuarios', compact('departamentos'));
    }

    public function categorias(){
        $adverts = DB::table('adverts')->select(DB::raw('categories.id, categories.name, COUNT(*) AS numero'))
        ->join('categories','categories.id', 'adverts.category_id')
        ->groupBy('categories.id')
        ->orderBy('numero','asc')
        ->get();

        $advertsActive = DB::table('adverts')->select(DB::raw('categories.id, categories.name, COUNT(*) AS numero'))
        ->join('categories','categories.id', 'adverts.category_id')
        ->where('adverts.advert_status_id',1)
        ->groupBy('categories.id')
        ->orderBy('numero','asc')
        ->get();
        return view('admin.estadistica.categorias', compact('adverts','advertsActive'));
    }
    
    public function anuncios(){
        $complaints = DB::table('adverts')->select(DB::raw('departaments.id, COUNT(*) AS numero_usuarios'))
        ->join('townshipes','townshipes.id', 'adverts.township_id')
        ->join('departaments','departaments.id', 'townshipes.departament_id')
        ->groupBy('departaments.id')
        ->orderBy('numero_usuarios','asc')
        ->get();
        return view('admin.estadistica.anuncios', compact('complaints'));
    }

    public function favoritos(){
        return view('admin.estadistica.favoritos');
    }
    
    public function denuncias(){

        $complaints = DB::table('complaints')->select(DB::raw('departaments.id, COUNT(*) AS numero_usuarios'))
        ->join('users','complaints.denounced', 'users.id')
        ->join('townshipes','townshipes.id', 'users.township_id')
        ->join('departaments','departaments.id', 'townshipes.departament_id')
        ->groupBy('departaments.id')
        ->orderBy('numero_usuarios','asc')
        ->get();
        return view('admin.estadistica.denuncias', compact('complaints'));
    }
}
