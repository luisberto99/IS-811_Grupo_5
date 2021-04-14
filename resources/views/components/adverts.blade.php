<x-app-layout>

    <div class="flex flex-row h-full">
            
        <div class="w-1/4 container mx-auto mt-4 py-8 px-12">
           <x-filter-options >
               <x-slot name="dep">
                   {{ $depto }}
               </x-slot>
               <x-slot name="cat">
                   {{ $cat }}
               </x-slot>
               <x-slot name="muni">
                   {{ $muni }}
               </x-slot>
               <x-slot name="order">
                   {{ $order }}
               </x-slot>

           </x-filter-options>
        </div>
        <div class="w-3/4 h-full mx-auto py-10 px-12 relative">
            <div class="h-15 absolute top-2 right-12 flex flex-row text-sm">
                <span class="py-2 px-2">Ordenar por:   </span>
                <select onchange="change()"" name="order" id="selectOrder" class="rounded h-15 py-1 leading-4 text-sm">
                    <option value="0">
                        Más reciente primero
                    </option>
                    <option value="1">
                        Más antiguo primero
                    </option>
                    <option value="2">
                        Precio: más alto a más bajo
                    </option>
                    <option value="3">
                        Precio: más bajo a más alto
                    </option>
                    
                </select>
            </div>
            <div class="grid grid-cols-4 gap-4 ">

         
            
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
                            <div class="py-1" style="float: right" >
                                <a href="{{route('adverts.edit',$advert->id)}}" @if ($advert->advert_status_id == 2) aria-disabled="true" class=" bg-gray-100 rounded-lg text-white mr-2" @endif class="px-4 bg-gray-400 rounded-lg text-white -bottom-8">Eliminar</a>
                            </div>
                        </div>  
                    @endif
    
                    
                </x-advert-card>
    
            @endforeach
    
            </div>
        </div>
        
    </div>


{{ $adverts->links() }}
    @yield('js')
</x-app-layout>
