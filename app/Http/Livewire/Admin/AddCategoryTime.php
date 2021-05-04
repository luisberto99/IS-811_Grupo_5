<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\CategoryExpiration;
use App\Models\Category;
use Illuminate\Support\Facades\DB;




class AddCategoryTime extends Component
{
    public $category_id, $available_days;
    protected $listeners =['render2' => 'render'];


    public function save(){
        $this->validate([
        'category_id' => 'required|unique:categories_expiration',
        'available_days'=>'required|numeric|min:1'
        ]);
    
        CategoryExpiration::create([
            'category_id'=> $this->category_id,
            'available_days'=> $this->available_days

        ]);
        $this->reset(['category_id','available_days']);
        $this->emit('render');


    }
    public function render()
    {
        $category = DB::select('SELECT `id`, `name` FROM `categories` where id NOT IN(SELECT category_id from `categories_expiration` )');

        
                return view('livewire.admin.add-category-time',compact('category'));
    }
}
