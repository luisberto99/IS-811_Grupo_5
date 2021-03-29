<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORTUNA</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-50">
    <div class="flex justify-between h-16">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-9">
                <a href="#">Atlantida</a>
                <a href="#">Colon</a>
                <a href="#">Puerto Cortes</a>
                <a href="#">Santa Barbara</a>
                <a href="#">Gracias a Dios</a>
                <a href="#">Olancho</a>
                <a href="#">Yoro</a>
                <a href="#">Ocotepeque</a>
                <a href="#">Copan</a>
                <a href="#">El paraiso</a>
                <a href="#">Comayagua</a>
                <a href="#">Lempira</a>
                <a href="#">La Paz</a>
                <a href="#">Francisco Morazan</a>
                <a href="#">Choluteca</a>
                <a href="#">Valle</a>
                <a href="#">Intibuca</a>
                <a href="#">Islas de la Bahia</a>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="container mx-auto bg-black-200 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="col-span-2 bg-blue-200 overflow-hidden shadow-xl sm:rounded-lg">
                <label class="font-serif text-2xl text-green-600 py-4">{{$advert->title}}</label> <br>
                <img src="{{$photo->photo_path}}" alt="Imagenes" class=" py-4">
                <label class="italic font-bold">Categoria: </label><label class="text-green-600 py-4">{{$category}}</label> <br>
                <label class="italic font-bold">Descripcion: </label><p class="leading-4 text-green-600 py-4">{{$advert->description}}</p> <br>
                <label class="italic font-bold">Precio: </label><label class="text-red-600 py-4">{{$adProduct->price}} {{$currency}}</label><br>
                <label class="italic font-bold">Estado: </label><label class="text-green-600 py-4">{{$adProduct->product_status}}</label><br>
                <label class="italic font-bold">Publicado en: </label><label class="text-green-600 py-4">{{$township}}, {{$department}}</label><br>
                <label class="italic font-bold">Fecha Creación: </label><label class="text-green-600 py-4">{{$advert->creation_date}}</label><br>
                <label class="italic font-bold">Fecha de expiracón: </label><label class="text-green-600 py-4">{{$advert->expiration_date}}</label>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-blue-200 overflow-hidden shadow-xl sm:rounded-lg ">
                        <img src="{{$user->profile_photo_url}}" alt="Imagen"> <br>
                        <label class="italic font-bold">Nombre: </label>{{$user->name}} <br>
                        <label class="italic font-bold">Número Telefonico: </label>{{$user->number}} <br>
                        <label class="italic font-bold">Correo: </label>{{$user->email}} <br>
                        <label class="italic font-bold">Anuncios Publicados: </label>{{$AlladdsUser}} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>