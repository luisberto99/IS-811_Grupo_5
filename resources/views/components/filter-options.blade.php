<?php
        $categories = DB::table('categories')->select('id','name')->get();
        $deptos = DB::table('departaments')->select('id','name')->get();
        $municipios = DB::table('townshipes')->select('id','name','departament_id')->get();

?>



<div class="fex flex-col space-y-2">
    <input class="w-full rounded text-lg p-1" type="button" value="Mis anuncios">
    <div >
        <input class="w-11/12 relative border-0 rounded" type="search" placeholder="Search">
        <i class="fa fa-search relative -left-7" ></i>
    </div>
    {{-- BOTON FILTRAR --}}
    <a class="mt-4 w-full rounded text-lg" href="f?" id="btnFiltrar">Filtrar</a>
    {{-- INPUT CATEGORIA --}}
    <div >
        <p class="font-bold">Categoria</p>
        <select class="w-full rounded" name="Categorias" id="Categorias" onchange="change()">
            <option value="0">Todas</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

           
        </select>
    </div>
    {{-- INPUT DEPARTAMENTOS --}}
    <div >
        <p class="font-bold">Departamento</p>
        <select class="w-full rounded" name="Departamento" id="Departamento" onchange="changeDepto()">
            <option value="0">Todos</option>
            @foreach ($deptos as $depto)
                <option value="{{ $depto->id }}">{{ $depto->name }}</option>
            @endforeach
        </select>
    </div>
    {{-- INPUT MUNICIPIOS --}}
    <div >
        <p class="font-bold">Municipio</p>
        <select class="w-full rounded" name="Municipio" id="Municipio" onchange="change()">
            <option value="0">Todos</option> 
        </select>
    </div>
    {{-- INPUT FECHA --}}
    <div >
        <p class="font-bold">Fecha de publicacion</p>
        <p>Desde:</p>
        <input type="date" class="rounded">
        <p>Hasta:</p>
        <input type="date" class="rounded">
    </div>
    {{-- INPUT ESTADO --}}
    <div >
        <p class="font-bold">Estado del anuncio</p>
        <input checked class="rounded" type="checkbox"  id="estadoActivo" value="estadoActivo" onchange="change()">
            <label for="estadoActivo" >  Activo</label><br>
        <input checked class="rounded" type="checkbox"  id="estadoInactivo" value="estadoInactivo" onchange="change()">
            <label for="estadoInactivo" >  Inactivo</label>
    </div>
    
    <input class="mt-4 w-full rounded text-lg p-1" type="button" value="Nuevo anuncio">





<script>
    let Categoria = 0;
    let Departamento = 0;
    let Municipio = 0;
    let Activo = 1;
    let Inactivo = 1;

    document.getElementById("Categorias").value = {{ $cat }};
    document.getElementById('Departamento').value = {{ $dep }};
    

    let municipios = <?php echo json_encode($municipios); ?>

    
  

    function change(){
        let url = 'show/f?';
        Categoria = $("#Categorias").val();
        Departamento = $('#Departamento').val();
        Municipio = $('#Municipio').val();
        if(document.getElementById('estadoActivo').checked){
            Activo = 1;
        }else{
            Activo = 0;
        }
        if(document.getElementById('estadoInactivo').checked){
            Inactivo = 1;
        }else{
            Inactivo = 0;
        }
        
        if(Categoria != 0){
            url += '&category='+ Categoria;
        }
        if(Departamento != 0){
            url += '&depto='+ Departamento;
        }
        if(Municipio != 0){
            url += '&muni='+ Municipio;
        }
        if(Activo == 0){
            url += '&noactivo=1'
        }
        if(Inactivo == 0){
            url += '&noinactivo=2'
        }
        document.getElementById('btnFiltrar').href = url;

     
    }

    function changeDepto(){
        DepartamentoID = document.getElementById('Departamento').value;
        $('#Municipio').html('<option value="0">Todos</option>');
        
        municipios.forEach(muni => {
            if(muni.departament_id == DepartamentoID){
                $('#Municipio').append(`<option value="${muni.id}">${muni.name}</option>`);
                console.log(`<option value="${muni.id}">${muni.name}</option>`)
            }
        });

        document.getElementById('Municipio').value = {{ $muni }};
        
        change();
    }

    $(document).ready(()=>{
        changeDepto();
    })

</script>


</div>