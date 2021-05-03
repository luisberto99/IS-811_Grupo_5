<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('adverts') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('adverts',0) }}" :active="request()->routeIs('adverts')">
                        {{ __('Buscar') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('nuevo') }}" :active="request()->routeIs('nuevo')">
                        {{ __('Nuevo Anuncio') }}
                    </x-jet-nav-link>
                </div>

            </div>

         <div>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrate</a>
            @endif
         </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('adverts') }}" :active="request()->routeIs('adverts')">
                {{ __('Buscar') }}
            </x-jet-responsive-nav-link>
        </div>



        <!-- Responsive Settings Options -->
    </div>
</nav>
