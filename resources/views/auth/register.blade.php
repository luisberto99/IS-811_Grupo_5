<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="flex gap-4 mt-4">
                <div class="w-1/3">
                    <x-jet-label for="gender" value="{{ __('Genero') }}" />
                    <select id="gender" name="gender" class="form-input rounded-md shadow-sm block mt-1 w-full" >
                        <option value="volvo">Femenino</option>
                        <option value="saab">Masculino</option>
                    </select> 
                </div>

                <div class="w-2/3">
                    <x-jet-label for="birthdate" value="{{ __('Fecha de Nacimiento') }}" />
                    <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Dirección') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="number" value="{{ __('Teléfono') }}" />
                <x-jet-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('number')" required autofocus autocomplete="number"  />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmación de Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

           <!--  <div class="flex gap-4 mt-4">
                <x-jet-input id="condition" class="block mt-1" type="checkbox" name="condition" :value="old('condition')"/>
                <x-jet-label for="condition" value="{{ __('Aceptar los terminos y condiciones') }}" />
            </div> -->

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estas registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrate') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
