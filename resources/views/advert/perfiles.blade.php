<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil de Usuario') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">

    <div class="py-12">
        <!-- component -->
<div class="bg-gray-100">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-blue-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="{{ Storage::url($perfil->profile_photo_path) }}"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$perfil->name}}</h1>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Estado</span>
                            <span class="ml-auto"><span
                                    class="bg-blue-500 py-1 px-2 rounded text-white text-sm">Activo</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Calificación</span>
                            <span class="ml-auto">{{$perfil->qualification}}</span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Se unio el</span>
                            <span class="ml-auto">{{$perfil->created_at}}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
               <!-- Calification -->
               <div>
                   
                    

               <!--prueba-->
               @if ($calificacionUsers)
                <div class="container bg-white">
                    <div class=" ">
                        <div class="following flex flex-col items-center">
                            <p class="text-gray-900 font-medium text-lg leading-8 pt-4 pb">Calificaciones de este usuario</p>
                            
                            
                        </div>
                        @foreach ($calificacionUsers as $calificacionUsers)
                            
                        <div class="bg-transparent h-auto w-full px-3 " >
                            <div class="flex  flex-col pt-2 ">
                                <div class="flex space-x-3 items-center">
                                    <img src="{{$calificacionUsers->profile_photo_path}}" class="rounded-full h-14 w-14 bg-black " alt="Imagen"> 
                                    <div>
                                        <p class="text-blue-900 pb-0" >Por {{$calificacionUsers->name}}</p>
                                        <div class="star-rating">
                                            <div class="back-stars">
                                                <i class="fa fa-star " aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                    
                                                <div class="front-stars" id="val" data-value="{{$calificacionUsers->qualification}}">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>                                                
                                            </div>
                                        </div>                                     
                                    </div>
                                </div>
                                    <div class="border-b border-blue-600 pb-2">                                             
                                        <p class="text-justify">{{$calificacionUsers->commentary}}</p>
                                        <p class="text-gray-600 text-xs ">Octubre 21, 2121</p>
                                    </div>
                            </div>
                        </div> 
                        @endforeach                                                                    
                    </div>
                </div>
                <dialog id="pru" class="bg-transparent z-0 relative w-screen h-screen">
                    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 transition-opacity opacity-0">
                        <div class="bg-white flex roundeds w-1/2 relative">
                            <div class="py-6 px-6 w-full">
                                <h1>Calificar a este usurio</h1>
                                <div class="mt-5 justify-start">
                                    <form action="{{route('perfiles.calificacion')}}" method="POST">
                                        @csrf
                                        <div class="justify-start text-left">
                                        </div>
                                        <div>
                                            <p>Calificación</p>
                                            <div id="rateYo"></div>
                                            <input type="hidden" name="rating" id="rating">
                                            <input type="hidden" id="qualified" name="qualified" value="{{$perfil->id}}">    


                                        </div>
                                        <div class="mb-9 justify-start text-left text-blue-600">
                                            <label>Escriba un comentario</label>
                                            <textarea name="message" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" ></textarea> 
                                            @error('message') <span class="error text-red-600">el campo esta vacio</span> @enderror
                                        </div>
                                        <div class="mt-9 mb-9">
                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">
                                                Calificar
                                            </button>
                                            <button type="button" onclick="modalClose('pru')" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                                Cerrar
                                            </button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </dialog>
               @endif
            </div>

               <!-- End Calification -->


            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Acerca de este perfil</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nombre</div>
                                <div class="px-4 py-2">{{$perfil->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Genero</div>
                                <div class="px-4 py-2">{{$perfil->gender}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">N° de telefono</div>
                                <div class="px-4 py-2">{{$perfil->number}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Dirección</div>
                                <div class="px-4 py-2">{{$perfil->address}}</div>
                            </div>
                            @foreach ($municipios as $municipio)
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Municipio</div>
                                <div class="px-4 py-2">{{$municipio->name}}</div>
                            </div>
                                @foreach ($departamentos as $departamento)
                                     @if ($municipio->departament_id == $departamento->id )
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Departamento</div>
                                            <div class="px-4 py-2">{{$departamento->name}}</div>
                                        </div>
                                     @endif
                                 @endforeach
                            @endforeach
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:{{$perfil->email}}">{{$perfil->email}}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Fecha de Nacimiento</div>
                                <div class="px-4 py-2">{{$perfil->birthdate}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 pb-10 uppercase text-center tracking-wide flex justify-around">
                        <div class="posts">
                          <p class="text-blue-500 text-sm">Publicaciones</p>
                          <p class="text-lg font-semibold text-blue-300">{{count($anuncios)}}</p>
                        </div>
                        <div class="followers">
                          <p class="text-blue-500 text-sm">Anuncios Activos</p>
                          <p class="text-lg font-semibold text-blue-300">{{count($activos)}}</p>
                        </div>
                        <div class="followers">
                            <p class="text-blue-500 text-sm">Calificar este usuario</p>
                            <button type="button" onclick="openModal('pru')" class="bg-transparent m-2 hover:bg-blue-500 text-blue-300 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-lg">
                                Calificar
                                </button>                          </div>
                        
                        <div>
                            <!--livewire('denuncia', ['usuario' => $perfil->id])-->
                            <div class="following">
                                <p class="text-blue-500 text-sm">Reportar este usuario</p>
                                
                                <button type="button" onclick="openModal('mymodalcentered')" class="bg-transparent hover:bg-blue-500 text-blue-300 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                                  Denunciar
                                </button>
                            </div>
                            <dialog id="mymodalcentered" class="bg-transparent z-0 relative w-screen h-screen">
                                <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 transition-opacity opacity-0">
                                    <div class="bg-white flex roundeds w-1/2 relative">
                                        <div class="py-6 px-6 w-full">
                                            <h1>Denuncia este usuario</h1>
                                            <div class="mt-5 justify-start">
                                                <form action="{{route('perfiles.store')}}" method="GET">
                                                    @csrf
                                                    <div class="justify-start text-left">
                                                        <input  class="block w-3 bg-white disabled text-white border border-gray-200 rounded leading-tight focus:outline-none focus:bg-white focus:border-white" name="idp" value="{{$perfil->id}}">
                                                    </div>
                                                    <div class="mb-9 justify-start text-left text-blue-600">
                                                        <label>Escribe la razon de tu denuncia</label>
                                                        <textarea name="message" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" ></textarea> 
                                                        @error('message') <span class="error text-red-600">el campo esta vacio</span> @enderror
                                                    </div>
                                                    <div class="mt-9 mb-9">
                                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">
                                                            Denunciar
                                                        </button>
                                                        <button type="button" onclick="modalClose('mymodalcentered')" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                                            Cerrar
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </dialog>
                        </div>                        
                       
                      </div>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>
           
                <div class="w-100 bg-blue-100">
                    @livewire('landing-carrousels', ['iduser' => $perfil->id])
            </div>
        </div>
    </div>
</div>
    </div>
</x-app-layout>

<script>
    function openModal(key) {
        document.getElementById(key).showModal(); 
        document.body.setAttribute('style', 'overflow: hidden;'); 
        document.getElementById(key).children[0].scrollTop = 0; 
        document.getElementById(key).children[0].classList.remove('opacity-0'); 
        document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
        document.getElementById(key).children[0].classList.remove('opacity-100');
        document.getElementById(key).children[0].classList.add('opacity-0');
        setTimeout(function () {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
        $(document).ready(function () {    
            
            $(function () {
 
 $("#rateYo").rateYo({
   ratedFill: "#008B8B",
    starWidth: "20px",

   fullStar:true,
   onSet:function(rating,reteYoInstance){
       $("#rating").val(rating);
   }
 });
  //stars 
        var frontStars = document.getElementsByClassName("front-stars")[0];
        var percentage = frontStars.getAttribute("data-value");
        //100 / 5 * 2.63;
        frontStars.style.width = percentage + "%";
        console.log(percentage);
        

        var rating = document.getElementsByClassName("star-rating")[0];
        rating.title = +frontStars.getAttribute("data-value") + "% de 100%";
        //End stars 

});

        });

  </script>
