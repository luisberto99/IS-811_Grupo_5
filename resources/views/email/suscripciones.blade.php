<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    @foreach ($id as $indice => $item)
    <h1 style="color: blue">{{$titulo[$indice]}}</h1>
    <p>{{$descripcion[$indice]}}</p>
    Fecha:<h5>{{$fecha[$indice]}}</h5>
    Para mas informacion: <a href="http://127.0.0.1:8000/advert/{{$item}}">Click Aqui</a>
    @endforeach
</body>
</html>