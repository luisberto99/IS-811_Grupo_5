<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listarCategorias($id) {
        $fechas = Subscription::where('user_id', $id)->orderby('category_id')->get();
        $subcripciones = DB::select('SELECT `id`, `name` FROM `categories` where id IN(SELECT category_id from `subscriptions` where user_id =  :id)', ['id' => $id]);
        $noSuscritos = DB::select('SELECT `id`, `name` FROM `categories` where id NOT IN(SELECT category_id from `subscriptions` where user_id =  :id)', ['id' => $id]);
        $fecha = [];
        $idSuscrito = [];
        $idNoSuscrito = [];
        $nombreCategoriaSuscrita = [];
        $nombreCategoria = [];

        foreach($subcripciones as $indice => $subcripcion) {
            $nombreCategoriaSuscrita [] = $subcripcion->name;
            $idSuscrito [] = $fechas[$indice]->id;
            $fecha [] = $fechas[$indice]->subscription_date;
        }

        foreach($noSuscritos as $desuscripcion) {
            $idNoSuscrito [] = $desuscripcion->id;
            $nombreCategoria [] = $desuscripcion->name;
            
        }
        
        return view('categorias.categorias', compact('nombreCategoriaSuscrita', 'fecha', 'nombreCategoria', 'idNoSuscrito', 'id', 'idSuscrito'));
    }

    public function guardar($idCategoria, $idUsuario) {
        $suscribir = new Subscription();
        $date = date("Y-m-d");
        $suscribir->subscription_date = $date;
        $suscribir->user_id = $idUsuario;
        $suscribir->category_id = $idCategoria;
        $suscribir->save();
        return redirect()->route('categorias.show', $idUsuario);
    }

    public function eliminar($idSusc, $id_user) {
        $eliminar = DB::delete('DELETE FROM `subscriptions` where id = :id', ['id' => $idSusc]);
        //$suscr = new Subscription();
        //$suscr = $eliminar;
        //$suscr -> delete();
        return redirect()->route('categorias.show', $id_user);
        //return $suscr;
    }
}
