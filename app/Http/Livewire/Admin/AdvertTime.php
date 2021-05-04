<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Queue\Listener;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryExpiration;




use Livewire\Component;

class AdvertTime extends Component
{
    protected $listeners =['render' => 'render'];
    public $idDelete;




    
    public function delete( $id){
        DB::table('categories_expiration')->where('category_id', '=', $id)->delete();

     $this->render();
     $this->emit('render2');


    }
    public function render()
    {
        $categorie = DB::select("SELECT categories.id, categories.name,categories_expiration.available_days 
                                FROM categories
                                JOIN categories_expiration 
                                ON categories.id = categories_expiration.category_id");
        $categories = Category::join('categories_expiration','categories.id','=','categories_expiration.category_id')
                                ->select('categories.id', 'categories.name','categories_expiration.available_days' )
                                ->get();
 
                         


        return view('livewire.admin.advert-time',compact('categories'));
    }
}
