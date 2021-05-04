@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Crear Categorias</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categorias.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria','readonly']) !!}
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
  });
});
    </script>
@stop