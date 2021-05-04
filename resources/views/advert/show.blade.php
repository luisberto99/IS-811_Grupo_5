{{-- <html lang="es">
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
    
    

</head> --}}

<x-app-layout>
<body class="bg-blue-50">
      @livewire('menu-departamentos'))
    <main>
    <div class=" flex   space-x-16  w-auto items-center m-16 z-0">
      <div class= "w-3/5 bg-white  ">            
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
          <a class="hover:text-blue-600 w-20" href="{{route('perfiles.show', $user->id)}}"><img src="{{ asset('/storage/'.$user->profile_photo_path) }}" class="rounded-full " alt="Imagen"></a>
           
          <div class="w-64">
            <h3 id="user" class=" font-bold  sm:text-lg	 " data-value="{{$user->id}}"> <a class="hover:text-blue-600 " href="{{route('perfiles.show', $user->id)}}">{{$user->name}}</a> </h3>
            <h4 class=" text-gray-500 text-xs">En oferta.com desde {{$userDt[0]}} del {{$userDt[1]}}</h4>
            
         <div class="">
           <div class="star-rating" title="{{$val}}% de 100%">
            <div class="back-stars">
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                               <div class="front-stars" id="val" style="width:{{$val}}%">
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
        @if ($userAuth)          
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
        @endif
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
                
                    
                    <div class="bg-white p-3 border-t border-blue-400">
                      
                      <h1 class="text-gray-900 font-bold text-xl  ">Detalles</h1>
                    
                      <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mx-8 mt-3 divide-y rounded shadow-sm">
                          <li class="flex items-center py-3">
                              <span class="font-bold">Estado</span>
                              <span class="ml-auto"><span
                                      class="bg-blue-500 py-1 px-2 rounded text-white text-sm">{{$adProduct->product_status}}</span></span>
                          </li>
                          
                          <li class="flex items-center py-3">
                            <span class="font-bold">Precio</span>
                            <span class="ml-auto">{{$adProduct->price}} {{$currency}}</span>
                        </li>
                        <li class="flex items-center  py-3">
                          <span class="font-bold">Categoría</span>
                          <div class="ml-auto">
                              <span >{{$category}}</span>
                              
                          </div>
                      </li>
                          <li class="flex items-center  py-3">
                            <span class="font-bold">Ubicación</span>
                            <div class="ml-auto">
                                <span >{{$township}}, {{$department}}</span>
                                
                            </div>
                        </li>
                        
                      <li class="flex items-center  py-3">
                        <span class="font-bold">Publicado el</span>
                        <div class="ml-auto">
                            <span >{{$advertDt[0]}} de {{$advertDt[1]}} del {{$advertDt[2]}} </span>
                            
                        </div>
                    </li>
                    
                      </ul>
                      <h1 class="font-bold ">Descripcion:</h1>
                    <p class="text-gray-800 text-justify break-words  ">{{$advert->description}}</p>
                    
                  </div>

                </div>
                <div class="col-span-2  mx-9">
                  <h1>Comentarios:</h1>
                  <form class="pl-6 pb-4 flex flex-wrap space-y-2"  method="POST" action="{{ route('advert.comment') }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{$userAuth}}">    
                    <input type="hidden" id="advert_id" name="advert_id" value="{{$advert->id}}">    

                    @csrf
                      @auth
                        <h1 class="text-green-700 ">¿Tienes una pregunta?</h1>
                        <textarea class="w-full" id="commentary" name="commentary"  placeholder="Escriba su pregunta"></textarea>
                        <div>
                          <button id="send" name="sendComment" class=" px-4 bg-blue-400 w-28 h-6 border border-blue-500  rounded-sm text-white hover:bg-blue-500">Enviar</button>
                        </div>
                      @endauth                        
                  </form>
                  
                          
                  @if (count($coment2))
                  <div class="pl-6 pb-4  bg-white ml-5 px-6 h-auto"   >
                    @php $counter = 0;@endphp

                    @foreach ($coment2 as $comFather)
                        @if (($comFather->parent_id) == null)
                         @php $counter = $counter+1;@endphp
                          <div id="question" class="border-b border-green-200 pb-0 container ">
                              <div class=" flex items-center   space-x-4   pt-4 ">   
                                <i class="far fa-question-circle text-gray-700"></i>		
                                <div class=" container pr-6">
                                  <p class="text-xs  text-gray-400 "><a class="hover:text-blue-600 " href="{{route('perfiles.show', $comFather->user_id)}}">{{$comFather->name}}</a></p>
                                  <p class=" text-md font-medium break-words">{{$comFather->commentary}}</p>
                                </div>			
                              </div>
                              @foreach ($coment2 as $comSon)
                                @if ($comFather->id == $comSon->parent_id)
                                  <div class=" flex items-center    space-x-4   ">   
                                    <i class="far fa-comment-dots text-gray-700"></i>	
                                    <div class="container pr-6 ">				
                                      <p class=" text-md break-words">{{$comSon->commentary}}</p>
                                      <div class= "pr-4 py-2 font-thin	text-gray-500 text-xs	 inline  bottom-0 right-0 "><p>Por <a class="hover:text-blue-600 " href="{{route('perfiles.show', $user->id)}}">{{$user->name}}</a>, {{$comSon->created_at}}</p></div>
                                    </div>
                                  </div>
                                @endif
                              @endforeach
                              @if ($advert->user_id == $userAuth)
                              <form class="pl-6  "  method="POST" action="{{ route('advert.comment') }}">
                                <input type="hidden" id="user_id" name="user_id" value="{{$userAuth}}">    
                                <input type="hidden" id="advert_id" name="advert_id" value="{{$advert->id}}">
                                <input type="hidden" id="parent_id" name="parent_id" value="{{$comFather->id}}">    
                                @csrf
                                <div>
                                  <textarea  class="w-full hidden mb-2 " id="commentary" name="commentary"  placeholder="Escriba su respuesta"></textarea>
                                </div>
                                <div class="flex justify-end pt-0">
                                    <button  name="answer" id="{{$comFather->id}}"  class=" px-4 bg-blue-400 w-28 h-6  rounded-sm text-white hover:bg-blue-500">Responder</button>                         
                                    <button id="send2" name="send2" class=" px-4 bg-gray-400 w-28 h-6 hidden   rounded-sm text-white hover:bg-blue-500">Enviar</button>
                                </div>
                              </form>                            
                           @endif

                            </div>
                          @endif
                          @if ($counter ==3)
                          @break
                              
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
                     @php $counter = $counter+1;@endphp
                      <div id="question" class="border-b border-green-200 pb-0 container ">
                          <div class=" flex items-center   space-x-4   pt-4 ">   
                            <i class="far fa-question-circle text-gray-700"></i>		
                            <div class=" container pr-6">
                              <p class="text-xs  text-gray-400 "><a class="hover:text-blue-600 " href="{{route('perfiles.show', $comFather->user_id)}}">{{$comFather->name}}</a></p>
                              <p class=" text-md font-medium break-words">{{$comFather->commentary}}</p>
                            </div>			
                          </div>
                          @foreach ($coment2 as $comSon)
                            @if ($comFather->id == $comSon->parent_id)
                              <div class=" flex items-center    space-x-4   ">   
                                <i class="far fa-comment-dots text-gray-700"></i>	
                                <div class="container pr-6 ">				
                                  <p class=" text-md break-words">{{$comSon->commentary}}</p>
                                  <div class= "pr-4 py-2 font-thin	text-gray-500 text-xs	 inline  bottom-0 right-0 "><p>Por <a class="hover:text-blue-600 " href="{{route('perfiles.show', $user->id)}}">{{$user->name}}</a>, {{$comSon->created_at}}</p></div>
                                </div>
                              </div>
                            @endif
                          @endforeach
                          @if ($advert->user_id == $userAuth)
                          <form class="pl-6  "  method="POST" action="{{ route('advert.comment') }}">
                            <input type="hidden" id="user_id" name="user_id" value="{{$userAuth}}">    
                            <input type="hidden" id="advert_id" name="advert_id" value="{{$advert->id}}">
                            <input type="hidden" id="parent_id" name="parent_id" value="{{$comFather->id}}">    
                            @csrf
                            <div>
                              <textarea  class="w-full hidden mb-2" id="commentary" name="commentary"  placeholder="Escriba su respuesta"></textarea>
                            </div>
                            <div class="flex justify-end pt-0">
                                <button  name="answer" id="{{$comFather->id}}"  class=" px-4 bg-blue-400 w-28 h-6  rounded-sm text-white hover:bg-blue-500">Responder</button>                         
                                <button id="send2" name="send2" class=" px-4 bg-gray-400 w-28 h-6 hidden   rounded-sm text-white hover:bg-blue-500">Enviar</button>
                            </div>
                          </form>                            
                       @endif
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

<script>
  
  function enviarComentario() {
      
      
    }
    $(document).ready(function () {    
  
        // **Imagenes en movimiento
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;
        sync1
          .owlCarousel({
            items: 1,
            slideSpeed: 1000,
            nav: true,
            autoplay: true,
            dots: true,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
              '<svg width="10px" height="10px"   viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
              '<svg width="10px" height="10px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
            ]
          })
          .on("changed.owl.carousel", syncPosition);
        sync2
          .on("initialized.owl.carousel", function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
            items: slidesPerPage,
            dots: true,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
          })
          .on("changed.owl.carousel", syncPosition2);
        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
          //if you disable loop you have to comment this block
          var count = el.item.count - 1;
          var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
          if (current < 0) {
            current = count;
          }
          if (current > count) {
            current = 0;
          }
          //end block
          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find(".owl-item.active").length - 1;
          var start = sync2.find(".owl-item.active").first().index();
          var end = sync2.find(".owl-item.active").last().index();
          if (current > end) {
            sync2.data("owl.carousel").to(current, 100, true);
          }
          if (current < start) {
            sync2.data("owl.carousel").to(current - onscreen, 100, true);
          }
        }
        function syncPosition2(el) {
          if (syncedSecondary) {
            var number = el.item.index;
            sync1.data("owl.carousel").to(number, 100, true);
          }
        }
        sync2.on("click", ".owl-item", function (e) {
          e.preventDefault();
          var number = $(this).index();
          sync1.data("owl.carousel").to(number, 300, true);
        });

        //Fin imagenes en movimiento

        /* Inicio stars 
        var frontStars = document.getElementsByClassName("front-stars")[0];
        var percentage = frontStars.getAttribute("data-value");
        //100 / 5 * 2.63;
        frontStars.style.width = percentage + "%";
        console.log(percentage);
        var rating = document.getElementsByClassName("star-rating")[0];
        rating.title = +frontStars.getAttribute("data-value") + "% de 100%";
        //Fin Stars*/
       
              
       //ventana emergente
       var openmodal = document.querySelectorAll('.modal-open')
      for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
        })
      }
    
      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', toggleModal)
      
      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
      }
      
      document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
        isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
        }
      };
      function toggleModal () {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
      }



       //Inicio StoreComentarios
       function limpiar(){
        $('#commentary').val('');
                }

     /* $.ajaxSetup({
        Headers:{
          'X-CSRF-TOKEN':$("input[name=_token]").nodeValue
        }
      });*/
      var id = 0;

      $("[name='answer']").click(function(e) {
          e.preventDefault();
          $(this).parent().siblings().find("#commentary").removeClass("hidden");
          var k = $("[name='send']")

         var p = $(this).siblings().removeClass("hidden");
         $(this).addClass("hidden")


        
        
      });

      //rating user
      
      //end rating user
     
     $("[name='sendComment']").click(function(e){
      e.preventDefault();  
      function seleccionar() {

        
      }
        var r = $(this).parent().siblings();
        k(r);

      function k(r) {
        var no = $(this);
        console.log(no);
        
      }
      
        
      var commentary = $(this).parent().siblings("#commentary").val();      
      var user_id = $(this).parent().siblings("#user_id").val();
      var advert_id = $("#advert_id").val();
      var _token = $(this).parent().siblings("input[name=_token]").val();
      console.log('parece que na');
      $.ajax({
        type:'POST',
        url:'/comment',
        data:{
          commentary: commentary,
          user_id:user_id,
          advert_id:advert_id,
          _token:_token
        },
        success:function(response) {
          if(response){
            limpiar();
            console.log('parece que funcioona');
            $('#question').load('question');

          }
          
        }
      });    
     });  
        
      //Responder preguntas
      
    function openModal(key) {
      document.getElementById(key).showModal(); 
      document.body.setAttribute('style', 'overflow: hidden;'); 
      document.getElementById(key).children[0].scrollTop = 0; 
      document.getElementById(key).children[0].classList.remove('opacity-0'); 
      document.getElementById(key).children[0].classList.add('opacity-100')
    }

  function modalClose(key) {
      document.getElementById(key).children[0].classList.remove('opacity-100');
      document.getElementById(key).children[0].classList.add('opacity-0');
      setTimeout(function () {
          document.getElementById(key).close();
          document.body.removeAttribute('style');
      }, 100);
  }
      });

</script>

</x-app-layout>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>


<script src="{{asset('js/show.js')}}"></script>




</html> --}}