@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Denuncia {{$denuncia->id}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="bg-secondary rounded p-2">
                @foreach ($denunciante as $accuser)
                <h6>
                    <a href="{{route('perfiles.show', $accuser->id)}}"><img class="rounded" width="40" src="{{ Storage::url($accuser->profile_photo_path) }}" alt=""></a> {{$accuser->name}}   
                    @endforeach
                    ha reportado a: 
                </h6>   
                <h6>
                    @foreach ($denunciado as $denounced)
                    <a href="{{route('perfiles.show', $denounced->id)}}"><img class="rounded" width="40" src="{{ Storage::url($denounced->profile_photo_path) }}" alt=""></a> {{$denounced->name}} 
                    @endforeach
                </h6>
            </div>
            <div class="p-2 bg-info rounded">
                <p>Fecha de la denuncia: {{$denuncia->date}} <br></p>
                <p>Mensaje             : {{$denuncia->message}}</p> 
            </div>
            
            <h3></h3>
            <p></p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5>Otras denuncias a este usuario</h5>
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
                    @foreach ($similares as $complaint)
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