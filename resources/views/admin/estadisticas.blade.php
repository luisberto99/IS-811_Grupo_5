@extends('adminlte::page')

@section('title', 'Administrador')

{{-- @section ('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Estadisticas</h1>
@stop

@section('content')
    @livewire('admin.estadisticas')
    
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