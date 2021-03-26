<!-- component -->
<div {{ $attributes->merge(['class'=>"w-full max-w-sm overflow-hidden rounded border bg-white shadow"]) }}>
  <div class="relative">
    <div class="h-48 bg-cover bg-no-repeat bg-center"
      style="background-image: url(https://picsum.photos/245/245">
    </div>
    <div style="background-color: rgba(0,0,0,0.6)"
      class="absolute bottom-0 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">$ 16.80</div>
    <div style="bottom: -20px;" class="absolute right-0 w-10 mr-2">
      <a href="#">
        <img class="rounded-full border-2 border-white" src="https://randomuser.me/api/portraits/women/17.jpg" >
      </a>
    </div>
  </div>
  <div class="p-3">
    <h3 class="mr-10 text-sm truncate-2nd">
        @if(isset($title))
            <a class="hover:text-blue-500" href="/huawwei-p20-pro-complete-set-with-box-a.7186128376">{{$title}}</a>
        @endif
    </h3>
    <div class="flex items-start justify-between">
      <p class="text-xs text-gray-500">Quezon City, Metro Manila {{$color}}</p>
      <button class="outline text-xs text-gray-500 hover:text-blue-500" title="Bookmark this ad"><i class="far fa-bookmark"></i></button>
    </div>
    <p class="text-xs text-gray-500"><a href="#" class="hover:underline hover:text-blue-500">username2019</a> • 2 days ago</p>
    <p>{{$slot}}</p>
  </div>

  

</div>