<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil de Usuario') }}
        </h2>
    </x-slot>
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
           
                <div >
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($mostrar as $activo) 


                        <div class=" rounded overflow-hidden border border-gray-500 w-full lg:w-full md:w-full bg-gray-200 mx-3 md:mx-0 lg:mx-0">
                            <div class="w-full flex justify-between p-3">
                              <div class="flex">
                                <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                                  <img src="{{ Storage::url($perfil->profile_photo_path) }}" alt="profilepic">
                                </div>
                                <span class="pt-1 ml-2 font-bold text-sm">{{$perfil->name}}</span>
                              </div>
                              <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
                            </div>
                            <div>
                                <h1>Carrusel</h1>
                                @foreach ($fotos as $foto)
                                @if ($foto->advert_id == $activo->id)
                                <img class="w-full h-20 object-cover object-center" src="{{$foto->photo_path}}" alt="">
                                @endif  
                                @endforeach 
                                </div>
                            <div class="px-3 pb-2">
                              <div class="pt-1">
                                <div class="mb-2 text-sm">
                                  <span class="font-medium mr-2">{{$activo->title}}</span><h1 class="justify-end">{{$activo->creation_date}}</h1>
                                </div>
                              </div>
                              <div class="text-sm mb-2 text-gray-600 cursor-pointer font-medium">{{$activo->description}}</div>
                              <div class="mb-2">
                                <div class="mb-2 text-sm">
                                    @foreach ($munis as $municipio)
                                       @if ($municipio->id == $activo->township_id)
                                            <span class="font-medium mr-2">{{$municipio->name}}</span>
                                            @foreach ($departamentos as $departamento)
                                                @if ($municipio->departament_id == $departamento->id )
                                                    {{$departamento->name}}
                                                @endif
                                            @endforeach
                                       @endif
                                    @endforeach
                                </div>
                              </div>
                            </div>
                          </div>

                    @endforeach
                </div>
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