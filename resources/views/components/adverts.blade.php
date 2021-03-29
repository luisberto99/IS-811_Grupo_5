<x-app-layout>

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
                
                @if ($advert->advert_status_id == 1)
                    <div class="py-1 w-100">
                        <div class="w-50 py-4" style="float: left"></div>
                        <div class="py-1" style="float: right">
                            <a href="{{route('adverts.edit',$advert->id)}}" class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
                        </div>
                    </div>  
                @endif

                
            </x-advert-card>

        @endforeach

        </div>
    </div>


{{ $adverts->links() }}
    

    @yield('js')
</x-app-layout>
