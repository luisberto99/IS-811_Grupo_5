<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias suscritas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">               
                <div class="container">
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
                                    <td class="border border-gray-400 px-4 py-2"><a href="http://127.0.0.1:8000/mycategories/eliminar/{{$item}}/{{$id}}"><button>Eliminar</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias no suscritas') }}
        </h2>

    <div class="container">
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
                        <td class="border border-gray-400 px-4 py-2"><a href="http://127.0.0.1:8000/mycategories/{{$idNo}}/{{$id}}"><button>Agregar</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>