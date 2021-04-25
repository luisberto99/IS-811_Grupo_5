@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Denuncias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
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
@stop

