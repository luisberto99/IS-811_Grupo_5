@extends('adminlte::page')

@section('title', 'Estadisticas Denuncias')

{{-- @section ('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Estadisticas de denuncias</h1>
@stop

@section('content')
    @livewire('admin.categorias')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
{{--     <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script> --}}
@stop