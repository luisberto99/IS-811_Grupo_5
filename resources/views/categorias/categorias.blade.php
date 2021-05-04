<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias suscritas') }}
        </h2>
    </x-slot>
@if(count($idSuscrito)>0)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-around bg-white overflow-hidden shadow-xl sm:rounded-lg">               
                <div class="">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Categorias suscritas') }}
                    </h2>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Categoria</th>
                                <th class="border border-gray-400 px-4 py-2">Fecha Subcripcion</th>
                                <th class="border border-gray-400 px-4 py-2">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($idSuscrito as $indice =>$item)
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">{{$nombreCategoriaSuscrita[$indice]}}</td>
                                    <td class="border border-gray-400 px-4 py-2">{{$fecha[$indice]}}</td>
                                    <td class="border border-gray-400 px-4 py-2"><a href="{{ route('categoria.eliminar', [$item,$id]) }}"><button>Eliminar</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if(count($idNoSuscrito)>0)
                
                <div class="">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias no suscritas') }}
        </h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Categoria</th>
                    <th class="border border-gray-400 px-4 py-2">Agregar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($idNoSuscrito as $i => $idNo)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{$nombreCategoria[$i]}}</td>
                        <td class="border border-gray-400 px-4 py-2"><a href="{{ route('categoria.guardar', [$idNo,$id]) }}"><button>Agregar</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endif
            </div>
        </div>
    </div>
@else
<strong>No hay suscripciones activas</strong>  
@endif


</x-app-layout>