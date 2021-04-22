<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORTUNA</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
    
    

</head>
<body class="bg-gray-200">
    <div class="flex justify-between h-16">
        <div class="flex">
            <h1>Web Name</h1>
        </div>
    </div>
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
    <main>
    <div class=" flex   space-x-16  w-auto items-center m-16 z-0">
      <div class= "w-3/5 bg-white rounded-2xl ">            
            <!--<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 ">
                <div class="col-span-2 bg-white  overflow-hidden shadow-xl sm:rounded-lg">-->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 border-b border-gray-200">
                      <div class="col-span-2 m-2">
                        <h1  class="font-sans text-2xl font-bold text-green-700">{{$advert->title}}</h1>
                        <h1 class="font-sans text-sm text-gray-500">{{$advert->creation_date}}</h1>
                      </div>
                      <div class="text-right m-2">
                        <h1 class="font-sans text-lg  text-green-700">{{$adProduct->product_status}}</h1>
                       <h1 class="font-sans text-xl text-red-600">{{$adProduct->price}} {{$currency}}</h1>
                      </div>
                    </div>
                    <!--photos-->
                    <div class="py-4 flex flex-col z-0 items-center">
                      <div id="sync1" class="max-w-md block owl-carousel owl-theme">
                          @foreach ($photos as $photo)
                            <div class="object-contain max-w-md max-h-60 ">
                            <img src="{{$photo->photo_path}}" class="object-contain   " alt=""></div>
                          @endforeach     
                        
                      </div>
                      <div id="sync2" class=" block w-auto px-16 owl-carousel owl-theme">
                        @foreach ($photos as $photo)
                          <div class="item w-24">
                          <img src="{{$photo->photo_path}}" class="    h-14" alt=""></div>
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
            <h3 id="user" class=" font-bold  sm:text-lg	 " data-value="{{$user->id}}">{{$user->name}} </h3>
            <h4 class=" text-gray-500 text-xs">En oferta.com desde {{$userDt[0]}} del {{$userDt[1]}}</h4>
            
         <div class="">
          <div class="star-rating">
            <div class="back-stars">
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @foreach ($val as $val)
                <div class="front-stars" id="val" data-value="{{$val->rating}}">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
              </div>
                @endforeach
               
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
                    <div class="flex space-x-11">
                      <p class="font-bold pb-4">Estado: </p><p class="text-green-700 pb-4">{{$adProduct->product_status}}</p><br>
                    </div>
                    <div class="flex space-x-1">
                      <p class="font-bold pb-4">Publicado el: </p><p class="text-green-700 pb-4"> {{$advertDt[0]}} de {{$advertDt[1]}} del {{$advertDt[2]}} </p><br>
                    </div>
                    <div class="flex space-x-1">
                      <p class="font-bold pb-4">Publicado en: </p><p class="text-green-700 pb-4">{{$township}}, {{$department}}</p><br>
                    </div>
                    <div class="flex space-x-8">
                      <p class="font-bold pb-4">Categoria: </p><p class="text-green-700 pb-4">{{$category}}</p><br>
                    </div>
                    <div class="flex space-x-14">
                      <p class="font-bold pb-4">Precio: </p><p class="text-green-700 pb-4">{{$adProduct->price}} {{$currency}}</p><br>
                    </div>
                </div>
                <div class="col-span-2  mx-9">
                  <form class="pl-6 pb-4 "  method="POST" action="{{ route('advert.comment') }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{$userAuth}}">    
                    <input type="hidden" id="advert_id" name="advert_id" value="{{$advert->id}}">    

                    @csrf
                      <div >
                        <h1 class="text-green-700 ">¿Tienes una pregunta?</h1>
                        <textarea class="w-full" id="commentary" name="commentary"  placeholder="Escriba su pregunta"></textarea>
                      </div>
                      <div class="py-2 flex justify-end">
                        <button id="send" name="sendComment" class=" px-4 bg-gray-400 w-28 h-6  rounded-sm text-white hover:bg-green-400">Enviar</button>
                      </div>
                  </form>
                          
                  @if (count($coment))
                  <div class="pl-6 pb-4  bg-white ml-5 px-6 h-auto"   >
                    @foreach ($coment as $comFather)
                        @if (($comFather->parent_id) == null)
                        
                          <div id="question" class="border-b border-green-200 pb-4">
                              <div class=" flex items-center   space-x-4   pt-4 ">   
                                <i class="far fa-question-circle text-gray-700"></i>		
                                <div>
                                
                                  <p class=" text-md font-medium ">{{$comFather->commentary}}</p>
                                  <p class="text-xs  text-gray-400 spb-2">Soy el nombre del que pregunta</p>
                                  
                                  </div>			
                                
                                
                                </div>
                              @foreach ($coment as $comSon)
                                @if ($comFather->id == $comSon->parent_id)
                                  <div class=" items-center   flex space-x-4   ">   
                                    <i class="far fa-comment-dots text-gray-700"></i>					
                                    <p class=" text-md ">{{$comSon->commentary}}</p>
                                  </div>
                                  @endif
                                    
                                  
                              @endforeach
                              @if ($advert->user_id == $userAuth)
                              <button  name="res" id="{{$comFather->id}}" type="button" class=" px-4 bg-blue-400 w-28 h-6  rounded-sm text-white hover:bg-green-400">Responder</button>                         

                              
                           @endif

                            </div>
                          @endif
                         
                         @endforeach
                                            <!--Inicio ventana modal-->

                         <div>
                          <div class="pt-4 object-right-bottom">
                            <button class="modal-open place-items-center bg-transparent text-xs border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-white font-bold py-2 px-4 hover:bg-green-500 rounded-sm">Todas las preguntas</button>
                           </div>
                        <!--Modal-->
                        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                          <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                          
                          <div class="modal-container bg-white w-11/12 md:max-w-3xl h-5/6 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                            
                            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                              </svg>
                              <span class="text-sm">(Esc)</span>
                            </div>

                            <!-- Add margin if you want to see some of the overlay behind the modal-->
                            <div class="modal-content py-4 text-left px-6 overflow-y-auto ">
                              <!--Title-->
                              <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">Preguntas</p>
                                <div class="modal-close cursor-pointer z-50">
                                  <svg class="fill-current text-white rounded-full  bg-gray-900" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                  </svg>
                                </div>
                              </div>

                              <!--Body-->
                              @foreach ($coment2 as $comFather)
                              @if (($comFather->parent_id) == null)
                                <div class="border-b border-green-200 relative  pb-4">
                                    <div class=" flex items-center   space-x-4   pt-4 ">   
                                      <i class="far fa-question-circle text-gray-700"></i>					
                                      <p class=" text-md font-medium ">{{$comFather->commentary}}</p>
                                    </div>
                                    
                                    @foreach ($coment2 as $comSon)
                                      @if ($comFather->id == $comSon->parent_id)
                                        <div class=" items-center   flex space-x-4  pb-2 ">   
                                          <i class="far fa-comment-dots text-gray-700"></i>					
                                          <p class=" text-md ">{{$comSon->commentary}}</p>
                                        </div>
                                        <div class="pr-4 py-2 font-thin	text-gray-500 text-xs	 absolute  bottom-0 right-0 "><p>{{$comSon->creation_date}} {{$user->name}}</p></div>
                                        @endif
                                    @endforeach
                                  </div>
                                @endif
                              
                               @endforeach

                              <!--Footer-->
                              <div class="flex justify-end pt-2">
                                
                                <button class="modal-close object-center	 bg-gray-500 w-16  h-8 rounded-lg text-white hover:bg-green-400">Cerrar</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                     @endif
                    
                      
                </div>
                    
                        
             </div>
         </div>

       </div>
        

    </main>
    
    
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>


<script src="{{asset('js/show.js')}}"></script>



</html>