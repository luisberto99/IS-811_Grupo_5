<div class="py-5  dark:text-white">
    <h1 class="text-lg">Departamentos</h1>
   <div class="w-full  md:grid md:inline-block  md:grid-cols-5 lg:grid-cols-9 grap-4 text-white justify-center sm:hidden">
        @foreach ($departamentos as $departamento)
            <a href="{{ asset('adverts/show/f?&depto='. $departamento->id) }}">
                <button class="w-11/12 m-1 border-box md:h-10 lg:h-20 rounded pointer bg-red-500 hover:bg-red-700">
                    {{ $departamento->name }}
                </button>
                
            </a>
        @endforeach
   </div>
</div>
