<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 class="mx-auto">Categorias a las que estoy suscrito</h1>
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
    <h1 class="mx-auto">Categorias a las que no estoy suscrito</h1>
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
</body>
</html>