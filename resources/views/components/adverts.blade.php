<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <title>Laravel</title>

<<<<<<< Updated upstream
    </head>

    <body  class="antialiased">

        <div class="flex flex-row h-full">
            
            <div class="w-1/4 container mx-auto mt-4 py-8 px-12">
               <x-filter-options></x-filter-options>
            </div>
            
            <div class=" w-3/4 h-full mx-auto grid grid-cols-4 gap-4 py-8 px-12">
                
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
                        {{ route('advert.show', $advert->advert_id)}}
                    </x-slot>
                    <x-slot name="Userid">
                        {{ auth()->user()->id}}
                    </x-slot>
                    <x-slot name="UserName">
                        {{ auth()->user()->name}}
                    </x-slot>
                    <x-slot name="UserLink">
                        {{ route('user.show', $idUser)}}
                    </x-slot>
                    <div class="py-1 w-100">
                        <div class="w-50 py-4" style="float: left"></div>
                        <div class="py-1" style="float: right">
                            <a href="{{route('adverts.edit',$advert->id)}}" class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
=======
    <div class="flex flex-row h-full">
            
        <div class="w-1/4 container mx-auto mt-4 py-8 px-12">

           <x-filter-options>
               {{--  <x-slot name="fill">
                    {{ $fill }}
                </x-slot>
 --}}
           </x-filter-options>
        </div>

        <i class="fab fa-adversal"></i>
        
        <div class=" w-3/4 h-full mx-auto grid grid-cols-4 gap-4 py-8 px-12">
            
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
                    {{ route('advert.show', $advert->advert_id)}}
                </x-slot>
                <x-slot name="Userid">
                    {{ auth()->user()->id}}
                </x-slot>
                <x-slot name="UserName">
                    {{ auth()->user()->name}}
                </x-slot>
                <x-slot name="UserLink">
                    {{ route('user.show', $idUser)}}
                </x-slot>
                
                @if ($advert->advert_status_id == 1)
                    <div class="py-1 w-100 relative bottom-0">
                        <div class="w-50 py-4" style="float: left"></div>
                        <div class="py-1 " style="float: right" >
                            <a href="{{route('adverts.edit',$advert->id)}}" @if ($advert->advert_status_id == 2) aria-disabled="true" class=" bg-gray-100 rounded-lg text-white mr-2" @endif class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
>>>>>>> Stashed changes
                        </div>
                      </div>  
                </x-advert-card>
    
            @endforeach
    
            </div>
        </div>


<<<<<<< Updated upstream
    {{ $adverts->links() }}
    </body>
=======
   <?php 
    if (isset($fill)) {
        echo $fill['depto'];
    }
   
   ?>


{{ $adverts->links() }}
    
>>>>>>> Stashed changes

</html>