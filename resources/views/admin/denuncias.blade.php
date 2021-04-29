@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Denuncias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>    
    @endif
    @if ($denuncia->count())
        <div class="card">
            <div class="card-body">
                <div>
                    <h4>Usuarios denunciados</h4>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Mensaje</th>
                            <th>Denunciante</th>
                            <th>Reportado</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($denuncia as $complaint)
                            <tr>
                                <td>{{$complaint->id}}</td>
                                <td>{{$complaint->date}}</td>
                                <td>{{$complaint->message}}</td>
                                @foreach ($usuarios as $user)
                                    @if ($user->id == $complaint->accuser)
                                        <td><a class="text-dark" href="{{route('perfiles.show', $complaint->accuser)}}">{{$user->name}}</a></td>
                                    @endif
                                    @if ($user->id == $complaint->denounced)
                                        <td><a class="text-dark" href="{{route('perfiles.show', $complaint->denounced)}}">{{$user->name}}</a></td>
                                    @endif
                                @endforeach
                                <td width="150px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.mostrar', $complaint->id)}}">Ver denuncia</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        <div class="card-body">
            <strong>No hay denuncias a usuarios.</strong>
        </div>
    @endif

    @if ($anunciodenuncia->count())
        <div class="card">
            <div class="card-body">
                <div>
                    <h4>Anuncios denunciados</h4>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Mensaje</th>
                            <th>Denunciante</th>
                            <th>Reportado</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anunciodenuncia as $complaint)
                            <tr>
                                <td>{{$complaint->id}}</td>
                                <td>{{$complaint->date}}</td>
                                <td>{{$complaint->message}}</td>
                                @foreach ($usuarios as $user)
                                    @if ($user->id == $complaint->accuser)
                                        <td><a class="text-dark" href="{{route('perfiles.show', $complaint->accuser)}}">{{$user->name}}</a></td>
                                    @endif
                                @endforeach
                                @foreach ($anuncios as $anuncio)
                                    @if ($anuncio->id == $complaint->advert_id)
                                        <td><a class="text-dark" href="{{route('advert.show', $anuncio->id)}}">{{$anuncio->title}}</a></td>
                                    @endif
                                @endforeach
                                <td width="150px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.mostrardenuncia', $complaint->id)}}">Ver denuncia</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        <div class="card-body">
            <strong>No hay denuncias a anuncios.</strong>
        </div>
    @endif
@stop
