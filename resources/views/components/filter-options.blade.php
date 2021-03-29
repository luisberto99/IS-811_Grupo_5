<?php
        $categories = DB::table('categories')->select('id','name')->get();
        $deptos = DB::table('departaments')->select('id','name')->get();

?>



<div class="fex flex-col space-y-2">
    <input class="w-full rounded text-lg p-1" type="button" value="Mis anuncios">
    <div >
        <input class="w-11/12 relative border-0 rounded" type="search" placeholder="Search">
        <i class="fa fa-search relative -left-7" ></i>
    </div>

    <div >
        <p class="font-bold">Categoria</p>
        <select class="w-full rounded" name="Categorias" id="Categorias" onchange="categoria()" >
            <option value="0">Todas</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

           
        </select>
    </div>
    <div >
        <p class="font-bold">Departamento</p>
        <select class="w-full rounded" name="Departamento" id="Departamento">
            <option value="0">Todos</option>
            @foreach ($deptos as $depto)
                <option value="{{ $depto->id }}">{{ $depto->name }}</option>
            @endforeach
        </select>
    </div>
    <div >
        <p class="font-bold">Fecha de publicacion</p>
        <p>Desde:</p>
        <input type="date" class="rounded">
        <p>Hasta:</p>
        <input type="date" class="rounded">
    </div>
    <div >
        <p class="font-bold">Estado del anuncio</p>
        <input class="rounded" type="checkbox"  id="estadoActivo" value="estadoActivo"><label for="estadoActivo">  Activo</label><br>
        <input class="rounded" type="checkbox"  id="estadoInactivo" value="estadoInactivo"><label for="estadoInactivo">  Inactivo</label>
    </div>
    <input class="mt-4 w-full rounded text-lg p-1" type="button" value="Nuevo anuncio">


</div>

<script>
    function categoria(){
        window.location='{{ asset('adverts/show/') }}'
    }
</script>