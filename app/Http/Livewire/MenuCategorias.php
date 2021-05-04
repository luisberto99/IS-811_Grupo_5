<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class MenuCategorias extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.menu-categorias', compact('categories'));
    }
}
