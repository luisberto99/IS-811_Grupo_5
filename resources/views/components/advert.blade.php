<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

    </head>

    @php
        $color = "blue";
    @endphp

    <body  class="antialiased">



    <div class="container mx-auto">
        <x-advert-card :color="$color" class="mb-4 mt-4">
            <x-slot name="title">
                Titulo 13
            </x-slot>
        </x-advert-card>

        <x-advert-card :color="$color">
            <x-slot name="title">
                Titulo 14
            </x-slot>
        </x-advert-card>
    </div>
        
    </body>




</html>