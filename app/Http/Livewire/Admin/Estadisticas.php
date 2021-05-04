<?php

namespace App\Http\Livewire\Admin;

use App\Models\Advert;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Estadisticas extends Component
{
    public function render()
    {
        $adverts = DB::table('adverts')->select(DB::raw('MONTHNAME(created_at) AS mes, COUNT(*) AS adverts'))->groupBy('mes')->get();

        $meses = [];
        $nAdverts = [];

        foreach ($adverts as $ad) {
            array_push($meses,  $ad->mes);
            array_push($nAdverts, $ad->adverts);
        }


        return view('livewire.admin.estadisticas', compact('adverts', 'meses','nAdverts'));
    }
}
