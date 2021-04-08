<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORTUNA</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    

    <style>#sync1 .item {
        background: #0c83e7;
        padding: 80px 0px;
        margin: 5px;
        color: #FFF;
        border-radius: 3px;
        text-align: center;
      }
      #sync2 .item {
        background: #C9C9C9;
        padding: 10px 0px;
        margin: 5px;
        color: #FFF;
        border-radius: 3px;
        text-align: center;
        cursor: pointer;
      }
      #sync2 .item h1 {
        font-size: 18px;
      }
      #sync2 .current .item {
        background: #0c83e7;
      }
      .owl-theme .owl-nav {
        /*default owl-theme theme reset .disabled:hover links */
      }
      .owl-theme .owl-nav [class*='owl-'] {
        transition: all 0.3s ease;
      }
      .owl-theme .owl-nav [class*='owl-'].disabled:hover {
        background-color: #D6D6D6;
      }
      #sync1.owl-theme {
        position: relative;
      }
      #sync1.owl-theme .owl-next,
      #sync1.owl-theme .owl-prev {
        width: 22px;
        height: 40px;
        margin-top: -20px;
        position: absolute;
        top: 50%;
      }
      #sync1.owl-theme .owl-prev {
        left: 10px;
      }
      #sync1.owl-theme .owl-next {
        right: 10px;
      }
      
    </style>

</head>
<body class="bg-gray-50">
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
        <div class="container mx-auto bg-black-200 py-6 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 ">
                <div class="col-span-2 bg-white  overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 border-b-2 border-black">
                        <div class="col-span-2 m-2">
                            <h1 class="font-sans text-2xl font-bold text-green-700">{{$advert->title}}</h1>
                            <h1 class="font-sans text-sm text-gray-500">{{$advert->creation_date}}</h1>
                        </div>
                        <div class="text-right m-2">
                            <h1 class="font-sans text-lg  text-green-700">{{$adProduct->product_status}}</h1>
                            <h1 class="font-sans text-xl text-red-600">{{$adProduct->price}} {{$currency}}</h1>
                        </div>
                    </div>
                    <div>
                    
                </div>
                <div class="justify-items-end w-64 h-auto sm:max-w-sm sm:max-h-80 sm:w-auto sm:h-auto sm:rounded-2xl font-sans text-sm p-2 bg-none sm:bg-white sm:text-base sm:p-4  sm:border-2 sm:border-gray-500">
                    <div class="flex  space-x-6  items-center border-b border-green-200 pb-2">
						<img src="{{$user->profile_photo_url}}" class="rounded-full " alt="Imagen"> 
						<div class="w-64">
							<h3 class=" font-bold  sm:text-lg	 ">{{$user->name}} </h3>
							<h4 class=" text-gray-500 text-xs">{{$user->created_at}}</h4>
							<div class="sm:text-right">Valoracion??</div>
						</div>                        
					</div class="">
                    <div class=" items-center flex flex-wrap space-x-4 border-b border-green-200 py-4 ">   
						<i class="fas fa-map-marker-alt text-green-700"></i>						
					    <p class="  ">Ubicacion:No disponible</p>
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
        </div>
        <div class="container py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="bg">
                    <h1 class="font-bold text-green-700 text-lg py-2">Detalles</h1>
                    <h1 class="font-bold pb-3">Descripcion:</h1>
                    <p class="text-green-700 pb-3">{{$advert->description}}</p>
                    <label class="font-bold pb-4">Estado: </label><label class="text-green-700 pb-4">{{$adProduct->product_status}}</label><br>
                    <label class="font-bold pb-4">Publicado el: </label><label class="text-green-700 pb-4">{{$advert->creation_date}}</label><br>
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
        </div>

    </main>
    <div id="sync1" class="owl-carousel owl-theme">
        <div class="item">
          <h1>1</h1></div>
        <div class="item">
          <h1>2</h1></div>
        <div class="item">
          <h1>3</h1></div>
        <div class="item">
          <h1>4</h1></div>
        <div class="item">
          <h1>5</h1></div>
        <div class="item">
          <h1>6</h1></div>
        <div class="item">
          <h1>7</h1></div>
        <div class="item">
          <h1>8</h1></div>
      </div>
      
      <div id="sync2" class="owl-carousel owl-theme">
        <div class="item">
          <h1>1</h1></div>
        <div class="item">
          <h1>2</h1></div>
        <div class="item">
          <h1>3</h1></div>
        <div class="item">
          <h1>4</h1></div>
        <div class="item">
          <h1>5</h1></div>
        <div class="item">
          <h1>6</h1></div>
        <div class="item">
          <h1>7</h1></div>
        <div class="item">
          <h1>8</h1></div>
      </div>
    
</body>

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script >
    
    $(document).ready(function() {
        console.log('it is working!');

var sync1 = $("#sync1");
var sync2 = $("#sync2");
var slidesPerPage = 4; //globaly define number of elements per page
var syncedSecondary = true;

sync1.owlCarousel({
  items : 1,
  slideSpeed : 2000,
  nav: true,
  autoplay: true,
  dots: true,
  loop: true,
  responsiveRefreshRate : 200,
  navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
}).on('changed.owl.carousel', syncPosition);

sync2
  .on('initialized.owl.carousel', function () {
    sync2.find(".owl-item").eq(0).addClass("current");
  })
  .owlCarousel({
  items : slidesPerPage,
  dots: true,
  nav: true,
  smartSpeed: 200,
  slideSpeed : 500,
  slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
  responsiveRefreshRate : 100
}).on('changed.owl.carousel', syncPosition2);

function syncPosition(el) {
  //if you set loop to false, you have to restore this next line
  //var current = el.item.index;
  
  //if you disable loop you have to comment this block
  var count = el.item.count-1;
  var current = Math.round(el.item.index - (el.item.count/2) - .5);
  
  if(current < 0) {
    current = count;
  }
  if(current > count) {
    current = 0;
  }
  
  //end block

  sync2
    .find(".owl-item")
    .removeClass("current")
    .eq(current)
    .addClass("current");
  var onscreen = sync2.find('.owl-item.active').length - 1;
  var start = sync2.find('.owl-item.active').first().index();
  var end = sync2.find('.owl-item.active').last().index();
  
  if (current > end) {
    sync2.data('owl.carousel').to(current, 100, true);
  }
  if (current < start) {
    sync2.data('owl.carousel').to(current - onscreen, 100, true);
  }
}

function syncPosition2(el) {
  if(syncedSecondary) {
    var number = el.item.index;
    sync1.data('owl.carousel').to(number, 100, true);
  }
}

sync2.on("click", ".owl-item", function(e){
  e.preventDefault();
  var number = $(this).index();
  sync1.data('owl.carousel').to(number, 300, true);
});
});
</script>
</html>