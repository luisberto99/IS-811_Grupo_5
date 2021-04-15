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
                        <div class="following">
                            @livewire('denuncia', ['usuario' => $perfil->id])
                        </div>                        
                       
                      </div>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>
           
                <div >
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($mostrar as $activo) 
                        <div class="py-4 px-4 grid grid-cols-3 gap-4 bg-gray-400"> 
                            <span class="text-gray-600">{{$activo->title}}</span><br>
                        <div></div>
                             @foreach ($fotos as $foto)
                                @if ($foto->advert_id == $activo->id)
                                <img class="w-36 h-20 object-cover object-center" src="{{$foto->photo_path}}" alt="">
                                @endif  
                             @endforeach           
                             <span class="text-gray-600">{{$activo->description}}</span><br>
                             <div></div>
                             <span class="text-gray-600">{{$activo->creation_date}}</span><br>
                        </div> 
                    @endforeach
                </div>
                <div class="mx-10 my-10"></div>
                
            </div>
        </div>
    </div>
</div>
    </div>
</x-app-layout>
