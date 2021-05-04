<div>
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
