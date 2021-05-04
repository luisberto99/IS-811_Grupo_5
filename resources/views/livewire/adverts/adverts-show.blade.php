<div class="flex flex-row h-full">
    <div id="menu-container" class="w-1/4 container mx-auto mt-4 py-8 px-12 hidden md:inline-block bg-gray-100 z-50 transition duration-500">

        


        <div class="fex flex-col space-y-2 relative">
            <div id="btn-close-menu" class="absolute hidden -right-2 -top-5 text-gray-400 text-2xl hover:text-gray-900 hover:text-2xl cursor-pointer">
                <i  class="fas fa-times "></i>
            </div>
            
            <input class="w-full rounded text-lg p-1" type="button" value="Anuncios">
            {{-- BOTON FILTRAR --}}
            <a  href="f?" id="btnFiltrar">
                <div class="mt-4 w-full rounded text-lg text-center bg-gray border border-solid border-current b p-2">
                    Filtrar
                </div>
            </a>
            {{-- INPUT CATEGORIA --}}
            <div >
                <p class="font-bold">Categoria</p>
                <select wire:model="categoria"  class="w-full rounded">
                    <option value="0">Todas</option>
                    @foreach ($categorias as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    
                    
                   
                </select>
            </div>
            {{-- INPUT DEPARTAMENTOS --}}
            <div >
                <p class="font-bold">Departamento</p>
                <select wire:model="departamento" class="w-full rounded" name="Departamento" id="Departamento">
                    <option value="">Todos</option>
                    @foreach ($departamentos as $depto)
                        <option value="{{ $depto->id }}">{{ $depto->name }}</option>
                    @endforeach
                </select>
               
            </div>
            {{-- INPUT MUNICIPIOS --}}
            @if (!is_null($municipios))
            <div >
                <p class="font-bold">Municipio</p>
                <select wire:model="municipio" class="w-full rounded" name="Municipio" id="Municipio">
                    <option value="0">Todos</option> 
                    @foreach ($municipios as $muni)
                        <option value="{{ $muni->id }}">{{ $muni->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            {{-- INPUT FECHA --}}
            <div >
                <p class="font-bold">Fecha de publicacion</p>
                <p>Desde:</p>
                <input wire:model="desde"  type="date" id="desde" class="rounded">
                <p>Hasta:</p>
                <input wire:model="hasta" type="date" id="hasta" class="rounded">
            </div>
            {{-- INPUT ESTADO --}}
            <div @if($userAd == 0)class="hidden"@endif >
                <p class="font-bold">Estado del anuncio</p>
                <input  wire:model="noActivo"  checked class="rounded" type="checkbox"  id="estadoActivo" value="1" >
                    <label for="estadoActivo" >  Activo</label><br>
                <input wire:model="noInactivo" checked class="rounded" type="checkbox"  id="estadoInactivo" value="2" >
                    <label for="estadoInactivo" >  Inactivo</label>
            </div>
            
                {{-- BOTON CREAR ANUNCIO --}}
                <a  href="../../nuevo" id="btnFiltrar">
                    <div class="mt-4 w-full rounded text-lg text-center bg-gray border border-solid border-current b p-2">
                        Publicar un Anuncio
                    </div>
                </a>
        </div>
  


     </div>

     <div class="sm:w-full md:w-3/4 h-full mx-auto py-10 px-12 relative">

        <div class="h-15 md:absolute top-2 sm:flex flex-row text-sm w-full">
            <div class="card-header md:w-1/2 sm:w-full">
                <input wire:model="search" type="text" class="rounded w-full" placeholder="Buscar">
            </div>
            {{-- SELECT ORDER --}}
            <span class="py-2 px-2">Ordenar por:   </span>
            <select wire:model="orden" class="rounded h-15 py-1 leading-4 text-sm">
                <option value="0">
                    Más reciente primero
                </option>
                <option value="1">
                    Más antiguo primero
                </option>
                <option value="2">
                    Precio: más alto a más bajo
                </option>
                <option value="3">
                    Precio: más bajo a más alto
                </option>
                <option value="4">
                    Calificacion: más alto a más bajo
                </option>
                <option value="5">
                    Calificacion: más bajo a más alto
                </option>
                
            </select>
        </div

    <div>
        


        @if ($adverts->count())
        <div class="grid sm:grid-cols-2 lg:grid-cols-3  gap-4 ">
            @foreach ($adverts as $advert)

                
            
                <x-advert-card>
                    <x-slot name="title">
                        {{ $advert->title}}
                    </x-slot>
                     <x-slot name="imgUser">
                        {{ $advert->imgUser}}
                    </x-slot>
                    <x-slot name="imgAdvert">
                        {{ $advert->imgAdvert}}
                    </x-slot>
                    <x-slot name="estado">
                       @if ($advert->estado == 2)
                            bg-gray-400
                       @else
                           
                       @endif
                    </x-slot>
                    {{-- <x-slot name="curriency">
                        {{ number_format($advert->price,2) }}
                    </x-slot> --}}
                    <x-slot name="price">
                        {{ number_format($advert->price,2) }}
                    </x-slot>
                    <x-slot name="location">
                        {{ $advert->township . ', '. $advert->departament }}
                    </x-slot>
                    <x-slot name="date">
                        {{ number_format((strtotime('now')-strtotime($advert->creation_date))/86400,0) }}
                        {{-- //{{ getday()->diff() }} --}}
                    </x-slot>
                    <x-slot name="AdvertLink">
                        {{ route('advert.show', $advert->advert_id)}}
                    </x-slot>


                    @if($userAd != 0))
                    <x-slot name="Userid">
                        {{ auth()->user()->id}}
                    </x-slot>
                    <x-slot name="UserName">
                        {{ auth()->user()->name}}
                    </x-slot>
                    <x-slot name="UserLink">
                        {{ route('perfiles.show', auth()->user()->id)}}
                    </x-slot>

                    
                        @if ($advert->advert_status_id == 1)
                            <div class="py-1 w-100">
                                <div class="w-50 py-4" style="float: left"></div>
                                <div class="py-1" style="float: right" >
                                    <a href="{{route('advertsUser.edit',$advert->id)}}" @if ($advert->advert_status_id == 2) aria-disabled="true" class=" bg-gray-100 rounded-lg text-white mr-2" @endif class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
                                </div>
                            </div>  
                        @endif

                                            
                    @else

                        <x-slot name="Userid">
                            {{ $advert->user_id }}
                        </x-slot>
                        <x-slot name="UserName">
                            {{ $advert->user_name }}
                        </x-slot>
                        <x-slot name="UserLink">
                            {{ route('perfiles.show', $advert->user_id )}}
                        </x-slot>

                    @endif
    
                    
                </x-advert-card>
    
            @endforeach
        </div>

        <div class="card-footer">
            {{ $adverts->links() }}
        </div>
        @else
            <div class="card-body py-5">
                <strong>
                    No hay anuncios disponibles.
                </strong>
            </div>
        @endif
    </div>

{{-- 
    <script>
        let Categoria = 0;
        let Departamento = 0;
        let Municipio = 0;
        let Activo = 1;
        let Inactivo = 1;
    
    
        
    
        let municipios = <?php echo json_encode($municipios); ?>
    
        
      
    
    
        function changeDepto(){
            DepartamentoID = document.getElementById('Departamento').value;
            $('#Municipio').html('<option value="0">Todos</option>');
            
            municipios.forEach(muni => {
                if(muni.departament_id == DepartamentoID){
                    $('#Municipio').append(`<option value="${muni.id}">${muni.name}</option>`);
                    console.log(muni.name);
                }
            });
    
            
        }
    
        $(document).ready(()=>{

            
    
            changeDepto();
    
            /* FECHA MAXIMA INPUT DATE */
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
    
            if(dd < 10){
                dd ='0'+ dd;
            } 
            if(mm < 10){
                mm ='0'+ mm
            } 
    
            toda = yyyy+'-'+mm+'-'+dd;
            $('#fechaInicio').attr("max", toda);
            $('#fechaFin').attr("max", toda);
    
            yyyy -= 1;
            min = yyyy+'-'+mm+'-'+dd;
            $('#fechaInicio').attr("min", min);
            $('#fechaFin').attr("min", min);
            })
    
    </script> --}}
</div>