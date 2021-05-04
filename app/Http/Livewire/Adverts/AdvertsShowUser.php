<?php

namespace App\Http\Livewire\Adverts;


use App\Models\AdvertStatus;
use App\Models\Category;
use App\Models\Departament;
use App\Models\Township;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdvertsShowuser extends Component
{

    use WithPagination;

    public $search;
    public $categoria;
    public $departamento;
    public $municipio;
    public $desde;
    public $hasta;
    public $noActivo = 1;
    public $noInactivo = 2;
    public $orden = 0;
    public $estado;
    
    public $departamentos = null;
    public $municipios = null;
    public $estados = null;
    public $categorias = null;
    


    public function updatingSearch(){
        $this->resetPage();
    }

    public function updatingCategoria(){
        $this->resetPage();

    }
    public function updatedDepartamento(){
        /* $this->resetPage(); */
        if($this->departamento != ""){
            $this->municipios = Township::where('departament_id',$this->departamento)->get();
        }else{
            $this->municipios = null;
        }

    }
    public function updatingMunicipio(){
        $this->resetPage();
    }
    public function updatingDesde(){
        $this->resetPage();
    }
    public function updatingHasta(){
        $this->resetPage();
    }
    public function updatingNoActivo(){
        $this->resetPage();
    }
    public function updatingNoInactivo(){
        $this->resetPage();
    }

    public function render()
    {
        $fill = [];

        $this->departamentos = Departament::all();
        $this->estados = AdvertStatus::all();
        $this->categorias = Category::all();

        $adverts = DB::table('adverts')
        ->join('products_adverts','products_adverts.advert_id','=', 'adverts.id')
        ->join('currencies','products_adverts.currency_id', '=', 'currencies.id')
        ->join('townshipes','townshipes.id','=','adverts.township_id')
        ->join('departaments','departaments.id','=','townshipes.departament_id')
        ->join('users','adverts.user_id', 'users.id')
        ->join('adverts_photos','adverts.id','adverts_photos.advert_id')
        ->select('adverts.id as advert_id', 'adverts.category_id','adverts.advert_status_id as estado', 'adverts.title as title', 'adverts.creation_date','adverts.user_id','users.profile_photo_path as imgUser','users.name as user_name','adverts_photos.photo_path as imgAdvert','products_adverts.id as product_id','products_adverts.price','townshipes.name as township','departaments.name as departament')
        ->when($this->categoria != 0 , function($query, $role){
            return $query->where('adverts.category_id', $this->categoria);
        }) 
        ->when($this->departamento != 0,function ($query, $role){
            return $query->where('departaments.id', $this->departamento);
        })
        ->when($this->municipio != 0,function($query, $role){
            return $query->where('townshipes.id', $this->municipio);
         })
         ->when($this->desde != "",function($query, $role){
            return $query->where('creation_Date','>=', $this->desde);
         })
         ->when($this->hasta != "",function($query, $role){
            return $query->where('creation_Date','<=', $this->hasta);
         })
         ->when($this->noActivo == '',function ($query, $role){
            return $query->where('advert_status_id','<>', 1);
        })
         ->when($this->noInactivo == '',function ($query, $role){
            return $query->where('advert_status_id','<>', 2);
        })
        
        
        ->when(true,function($query, $role){
            switch ($this->orden) {
                case '0':
                    return $query->orderBy('creation_Date', 'desc');
                    break;
                case '1':
                    return $query->orderBy('creation_Date', 'asc');
                    break;
                case '2':
                    return $query->orderBy('price', 'desc');
                    break;
                case '3':
                    return $query->orderBy('users.qualification', 'desc');
                    break;
                case '4':
                    return $query->orderBy('price', 'asc');
                    break;
                case '5':
                    return $query->orderBy('price', 'desc');
                    break;
                default:
                    return $query->orderBy('creation_Date', 'desc');
                    break;
            }
         })
        
        
        ->where('adverts.user_id', auth()->user()->id)


        ->where('title','LIKE','%'. $this->search . '%')
        /* ->Where('adverts.description','LIKE','%'. $this->search . '%') */
        ->orderBy('creation_Date', 'desc')
        ->groupBy('adverts.id')
        ->paginate(9);

        $userAd = 1;

        return view('livewire.adverts.adverts-show', compact('adverts','userAd'));
    }
}
