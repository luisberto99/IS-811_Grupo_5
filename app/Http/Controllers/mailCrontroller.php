<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\SuscripcionesMailable;
use Illuminate\Support\Facades\Mail;

class mailCrontroller extends Controller
{
    public function index($id) {
        $sql = DB::select('SELECT id, title, `description`, category_id, creation_date FROM `adverts` WHERE category_id IN(SELECT category_id FROM subscriptions WHERE user_id = :id) ORDER BY creation_date DESC', ['id' => $id]);
        $fecha = [];
        $titulo = [];
        $descripcion = [];
        $id = [];

        foreach($sql as $item) {
            $fecha [] = $item->creation_date;
            $titulo [] = $item->title;
            $descripcion [] = $item->description;
            $id [] = $item->id;
        }
        $this->guardar($fecha, $titulo, $descripcion, $id);
        return redirect()->route('adverts');
    }

    public function guardar($fecha, $titulo, $descripcion, $id) {
        $email = new SuscripcionesMailable($fecha, $titulo, $descripcion, $id);
        Mail::to('geosierra2017@gmail.com')->send($email);
        
    }
}
