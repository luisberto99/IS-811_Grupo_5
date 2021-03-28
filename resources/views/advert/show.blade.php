<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORTUNA</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="conteiner">
        <div class=" grid grid-cols-12 bg-blue-400 h-80 ">
            <div  class ="  bg-red-400   col-span-5  "><!--Col 1-->
                <div>
                   <h1>{{$advert->title}}</h1>             
                    
                    <h3>Detalles</h3><!--Col Decripcion anuncio-->
                    <h3>Descripcion</h3>
                    <p> {{$advert->descripcion}}</p>


                </div>
                <div>table
                    <!--Col tabla anuncio-->
                </div>
                <div>similar
                    <!--Col anuncios similares-->
                </div>
            </div> 
            <div class =" bg-yellow-400  col-span-7  "><!--Col 2-->
                <div>
                    prguta
                </div>
                <div>
                    respusta y pregu
                </div>
                <div>
                    pregunta y rest
                </div>
            </div>
        </div>
    </div>
</body>
</html>