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
                    ha reportado el anuncio: 
                </h6>   
                <h6>
                    @foreach ($adenunciado as $denounced)
                    <p> Titlo:
                    <a class="text-white" href="{{route('advert.show', $denounced->id)}}">{{$denounced->title}}</a><br>
                   </p>
                    <p>Descripción:{{$denounced->description}} </p>
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
            <p class="h5">Dar de baja al anuncio:</p>
                @foreach ($adenunciado as $adenounced)
                    @if ($adenounced->advert_status_id == 1)
                        <p class="form-control">
                            {{$adenounced->title}} 
                        </p>
                        {!! Form::model($denounced, ['route' => ['admin.anunciobaja', $denounced], 'method' => 'put']) !!}
                            {!! Form::submit('Dar de baja', ['class' => 'btn btn-danger mt-2']) !!}
                        {!! Form::close() !!}
                    @else
                    <p class="h5 text-success">El anuncio ya se dio de baja</p>
                    @endif
                @endforeach
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div>
                <p class="h5">Desestimar la denuncia</p><br>
            </div>
            <div>
                {!! Form::open(['route' => 'admin.denunciastore']) !!}

                <div>
                    {!! Form::hidden('id', $denuncia->id) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('resolution', 'Mensaje') !!}
                    {!! Form::textarea('resolution', null, ['class' => 'form-control mh-50', 'placeholder' => 'Escribe la razón de la desestimación de la denuncia']) !!}
                    
                    @error('resolution')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Desestimar', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br>
    <br><br><br>
    @if ($similares->count())
        <div class="card">
            <div class="card-body">
                <h5>Otras denuncias a este anuncio</h5>
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
            <div class="card body">
                <strong>Esta es la unica denuncia a este anuncio</strong>
        
            </div>   
    @endif
@stop