<?php

namespace App\Http\Livewire;

use App\Models\Advert;
use App\Models\AdvertStatus;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Departament;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Township;
use DASPRiD\EnumTest\WeekDay;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Exceptions\MissingFileUploadsTraitException;

class FormularioAnuncio extends Component
{

    use WithFileUploads;

    public $titulodelAnuncio = '';
    public $descripciondelAnuncio = '';
    public $estado = 1;
    public $categoria;
    public $departamento;
    public $municipio;
    public $precio = '';
    public $contenido;
    public $moneda;
    public $imagenes = [3];

    

    public function resetImputFiels()
    {
        $this->imagenes = [];
        $this->titulodelAnuncio = '';
        $this->descripciondelAnuncio = ''; 
        $this->categoria = -1;
        $this->departamento = -1;
        $this->municipio = -1;
        $this->precio = '';
        $this->contenido = -1;
        $this->moneda = -1;
        
    }
    

    public function guardar(){
        if(count($this->imagenes) > 4){
            $this->imagenes = [3];
        }

        if($this->categoria != 8){
            $this->validate([
                'imagenes.*' => 'required|image',
                'titulodelAnuncio' => 'required',
                'descripciondelAnuncio' => 'required',
                'categoria' => 'required',
                'departamento' => 'required',
                'municipio' => 'required',
                'precio' => 'required',
                'contenido' => 'required',
                'moneda' => 'required'
        ]);
        }else{
            $this->validate([
                'imagenes.*' => 'required|image',
                'titulodelAnuncio' => 'required',
                'descripciondelAnuncio' => 'required',
                'categoria' => 'required',
                'departamento' => 'required',
                'municipio' => 'required'
            ]);

        }

        $anuncio = new Advert;
        $anuncio->title=$this->titulodelAnuncio;
        $anuncio->description=$this->descripciondelAnuncio;
        $anuncio->creation_date=now()->format('Y-m-d');
        $anuncio->expiration_date=now()->format('Y-m-d');
        $anuncio->user_id=Auth::user()->id;
        $anuncio->category_id=$this->categoria;
        $anuncio->advert_status_id=$this->estado;
        $anuncio->township_id=$this->municipio;
        $anuncio->save();

        if($this->categoria != 8){
            $producto = new Product;
            $producto->price=$this->precio;
            $producto->product_status=$this->contenido;
            $producto->advert_id=$anuncio->id;
            $producto->currency_id=$this->moneda;
            $producto->save();
        }


        foreach($this->imagenes as $imagen){
            $url = $imagen->store('public/imagenes');

            //$url = $request->file('imagen')->store('public/imagenes');
            $url1 = Storage::url($url);
    
    
            $foto = new Photo;
            $foto->photo_path=$url1;
            $foto->advert_id=$anuncio->id;
            $foto->save();

            
   
        }


        

        session()->flash('info','Anuncio publicado correctamente');
        $this->resetImputFiels();

        return redirect()->to('advert/'.$anuncio->id);

        

        
       /*Advert::create([
           'title' => $this->titulodelAnuncio,
           'description' => $this->descripciondelAnuncio,
           'creation_date' => now()->format('Y-m-d'),
           'expiration_date'=> '+5 week',
           'user_id' => Auth::user()->id,
           'category_id' => $this->categoria,
           'advert_status_id' => 1,
           'township_id' => $this->municipio




       ]);*/

        
    }


    public function render()
    {
        $estados = AdvertStatus::all();
        $categories = Category::all();
        $departaments = Departament::all();
        $townships = Township::all();
        $moneds = Currency::all();
        return view('livewire.formulario-anuncio', compact('categories', 'departaments', 'townships', 'moneds'));
    }


}
