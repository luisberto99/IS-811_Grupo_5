<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza tu información personal.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                @if ($this->user->profile_photo_path)
                    
                
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ Storage::url($this->user->profile_photo_path) }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>
                @endif

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Seleciona una nueva foto') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remover fotografia') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
    

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Telefono -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="number" value="{{ __('Telefono') }}" />
            <x-jet-input id="number" type="number" class="mt-1 block w-full" wire:model.defer="state.number" />
            <x-jet-input-error for="number" class="mt-2" />
        </div>

    
        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input disabled id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!--Departamento  -->
<div class="col-span-6 sm:col-span-4">
    <x-jet-label for="departamento" value="{{ __('Departamento') }}" />
    <x-jet-input id="departamento" type="text" class="mt-1 block w-full" wire:model.defer="state.departamento" />
    <x-jet-input-error for="departamento" class="mt-2" />
</div>

<div class="flex gap-4 mt-4">
    <div class="w-1/2">
        <x-jet-label for="departamento" value="{{ __('Departamento') }}" />
        <select id="departamento" wire:model='departamento' name="departamento" class="form-input rounded-md shadow-sm block mt-1 w-full" >
            <option value='-1'>Seleccione uno</option>
                    @foreach($departaments as $departament)
                        <option value={{ $departament->id }}> {{ $departament->name }}</option>
                    @endforeach
        </select> 
    </div>

    <div class="w-1/2">
        <x-jet-label for="township" value="{{ __('Municipio') }}" />
        <select id="township" wire:model='township_id' name="township" class="form-input rounded-md shadow-sm block mt-1 w-full" >
            <option value='-1'>Seleccione uno</option>
              {{--       @foreach($townships as $township)
                       
                           <option value={{ $township->id }}> {{ $township->name }}</option>
                       
                    @endforeach --}}
        </select> 
    </div>

</div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
