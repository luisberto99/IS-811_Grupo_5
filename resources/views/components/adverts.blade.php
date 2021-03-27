<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

    </head>

    <body  class="antialiased">


        <h1>User: {{ $idUser }}</h1>
        <h1>{{ count($adverts) }}</h1>
        <h1>
            
        </h1>
        <div class="container mx-auto grid grid-cols-4 gap-4">
            
            @foreach ($adverts as $advert)
            
            
        
            <x-advert-card>
                <x-slot name="title">
                    {{ $advert->title}}
                </x-slot>
                {{-- <x-slot name="curriency">
                    {{ number_format($advert->price,2) }}
                </x-slot> --}}
                <x-slot name="price">
                    {{ number_format($advert->price,2) }}
                </x-slot>
                <x-slot name="location">
                    {{ $advert->township . ', '. $advert->departament }}
                </x-slot>
                <x-slot name="date">
                    {{ number_format((strtotime('now')-strtotime($advert->creation_date))/86400,0) }}
                    {{-- //{{ getday()->diff() }} --}}
                </x-slot>
                <x-slot name="AdvertLink">
                    {{ route('advert.show', $advert->id)}}
                </x-slot>
                <x-slot name="UserLink">
                    {{ route('user.show', $idUser)}}
                </x-slot>
            </x-advert-card>

        @endforeach

    </div>
    {{ $adverts->links() }}

    </body>

</html>