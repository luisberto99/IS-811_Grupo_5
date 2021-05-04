<div>
    @if($categories->count()> 0)
    <div>
        <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Categoria</th>
                    <th>Dias</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <th class="mx-aouto">{{ $category->name }}</th>
                            <th class="mx-auto">{{ $category->available_days  }}</th>
                          
                            <th width="200px" >
                                    
                               <button type="button" class="btn btn-dark"  wire:click="delete({{ $category->id }})">Eliminar</button>
                               {{$idDelete}}
                               
                            </th>
                            
                            @endforeach
                        </tr>
            </tbody>
        </table>

        {{-- 
        <div class="card-footer">
            {{ $users->links() }}
        </div> --}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay registros.</strong>
    </div>
    @endif
 </div>
 
 
