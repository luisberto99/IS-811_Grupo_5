@extends('adminlte::page')

@section('title', 'Administrador')

{{-- @section ('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Días que un anuncio puede estar publicado segun su categoría</h1>
@stop

@section('content')
<div class="card">
 
    <div class="card-header">
        <div class="input-group mb-3">
            @livewire('admin.add-category-time')
        </div>
         
    </div>
 
    @livewire('admin.advert-time')

    </div>
</div>
    
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@stop

@section('js')

    <script src="{{ mix('js/app.js') }}"></script>
    <script> console.log('Hi!'); </script>
    @livewireScripts
{{--     <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script> --}}
@stop