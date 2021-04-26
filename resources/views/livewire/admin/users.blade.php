<div>
   <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre o correo de un usuario.">
        </div>
    
        @if($users->count()> 0)
        <div>
            <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>mail</th>
                        @can('admin.user.permisos')
                            <th></th>
                        @endCan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                @can('admin.user.permisos')
                                    <th width="160px" >
                                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}">Editar permisos</a>
                                    </th>
                                @endCan
                                @endforeach
                            </tr>
                </tbody>
            </table>

            <div class="card-footer">
                {{ $users->links() }}
            </div>
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros.</strong>
        </div>
        @endif
       </div>
   </div>
</div>

