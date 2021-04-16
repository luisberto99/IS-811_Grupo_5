<x-app-layout>
<div class="bg-gray-200">
      <div class="w-11/12 m-auto">
        @livewire('menu-departamentos')
      </div>
    </div>
    <main>
    <div class=" flex   space-x-16  w-auto items-center m-16">
      <div class= "w-3/5 bg-white rounded-2xl ">            
            <!--<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 ">
                <div class="col-span-2 bg-white  overflow-hidden shadow-xl sm:rounded-lg">-->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 border-b border-gray-200">
                      <div class="col-span-2 m-2">
                        <h1 class="font-sans text-2xl font-bold text-green-700">{{$advert->title}}</h1>
                        <h1 class="font-sans text-sm text-gray-500">{{$advert->creation_date}}</h1>
                      </div>
                      <div class="text-right m-2">
                        <h1 class="font-sans text-lg  text-green-700">{{$adProduct->product_status}}</h1>
                       <h1 class="font-sans text-xl text-red-600">{{$adProduct->price}} {{$currency}}</h1>
                      </div>
                    </div>
                    <!--photos-->
                    <div class="py-4 flex  flex-col  items-center">
                      <div id="sync1" class="max-w-md block owl-carousel owl-theme">
                          @foreach ($photos as $photo)
                            <div class="object-contain max-w-md max-h-60 ">
                            <img src="{{$photo->photo_path}}" class="" alt=""></div>
                          @endforeach     
                        
                      </div>
                      <div id="sync2" class=" block w-auto px-16 owl-carousel owl-theme">
                        @foreach ($photos as $photo)
                          <div class="item w-24">
                          <img src="{{$photo->photo_path}}" class=" h-14" alt=""></div>
                        @endforeach
                      </div>
                    </div>
                    <!--end photos-->    
				
      </div>
       <!--card-->
       <div class="justify-items-end w-64 h-auto sm:max-w-sm sm:max-h-80 sm:w-auto sm:h-auto sm:rounded-2xl font-sans text-sm p-2 bg-none sm:bg-white sm:text-base sm:p-4  sm:border-2 sm:border-gray-500">
        <div class="flex  space-x-6  items-center border-b border-green-200 pb-2">
          <img src="{{$user->profile_photo_url}}" class="rounded-full " alt="Imagen"> 
          <div class="w-64">
            <h3 class=" font-bold  sm:text-lg	 ">{{$user->name}} </h3>
            <h4 class=" text-gray-500 text-xs">En oferta.com desde {{$userDt[0]}} del {{$userDt[1]}}</h4>
            
         <div class="">
          <div class="star-rating">
            <div class="back-stars">
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <div class="front-stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
        </div>
         </div>
          </div>                        
        </div >
        <div class=" items-center flex flex-wrap space-x-4 border-b border-green-200 py-4 ">   
            <i class="fas fa-map-marker-alt text-green-700"></i>						
            <p class="  ">{{$townshipUser}}, {{$departmentUser}}</p>
        </div>
        <div  class="   border-b border-green-200 py-4">
          <div class=" items-center  space-x-4 flex flex-wrap ">
            <i class="fas fa-phone-alt text-green-700" ></i>							
            <p class="  ">{{$user->number}}</p>
          </div>
          <div class="items-center   space-x-4 flex flex-wrap ">
              <i class="fas fa-envelope text-green-700"></i>	
              <p class="  ">{{$user->email}} </p> 
          </div>
        </div>
        <div  class=" hidden sm:flex  sm:items-center sm:pt-2">
          <div class="flex-1 border-r border-green-200 text-center pr-4">
              <h3 class="py-2     text-red-600  font-bold	">{{$AlladdsUser}} </h3>
              <p class="  text-xs">Anuncios Publicados </p>
          </div>
          <div  class="flex-1 text-center pl-4">
            <h3 class="py-2    text-red-600  font-bold">{{$adsActive}} </h3>
            <p class="text-xs ">Anuncios Activos </p>
          </div>
        </div>
      </div>
      </div>
       <!--card-->

    </div>
        <div class="container py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="bg">
                    <h1 class="font-bold text-green-700 text-lg py-2">Detalles</h1>
                    <h1 class="font-bold pb-3">Descripcion:</h1>
                    <p class="text-green-700 pb-3">{{$advert->description}}</p>
                    <label class="font-bold pb-4">Estado: </label><label class="text-green-700 pb-4">{{$adProduct->product_status}}</label><br>
                    <label class="font-bold pb-4">Publicado el: </label><label class="text-green-700 pb-4"> {{$advertDt[0]}} de {{$advertDt[1]}} del {{$advertDt[2]}} </label><br>
                    <label class="font-bold pb-4">Publicado en: </label><label class="text-green-700 pb-4">{{$township}}, {{$department}}</label><br>
                    <label class="font-bold pb-4">Categoria: </label><label class="text-green-700 pb-4">{{$category}}</label><br>
                    <label class="font-bold pb-4">Precio: </label><label class="text-green-700 pb-4">{{$adProduct->price}} {{$currency}}</label><br>
                </div>
                <div class="col-span-2">
                    <div class="pl-6 pb-4">
                        <h1 class="text-green-700">¿Tienes una pregunta?</h1>
                        <textarea cols="100" rows="3" placeholder="Escriba su pregunta"></textarea>
                    </div>
                    <div class="pl-6 pb-4">
                        <h1 class="text-green-700 pb-4">Preguntas y respuestas</h1>
                        <textarea cols="100" rows="3" placeholder="Escriba su pregunta">Pregunta: Lorem, ipsum dolor sit amet consectetur adipisicing elit.</textarea>
                        <div class="pt-6">
                            <textarea cols="100" rows="3" placeholder="Escriba su pregunta">Pregunta: Lorem, ipsum dolor sit amet consectetur adipisicing elit.</textarea>
                        </div>
                        
                    </div>
                </div>
            </div>
        

    </main>
    
    
    <script src="{{asset('js/show.js')}}"></script>
  </div>
</x-app-layout>