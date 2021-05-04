<div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
Agregar categoría  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="exampleModalLabel">Cantidad de días que un anuncio puede estar publicado segun su categoría</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @error('category_id') <span name="error" value="false" class="error text-red-600">*Por favor, selecciona una categoría</span> @enderror

            <div class="input-group mb-3">
                <div class="input-group-prepend">

                  <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
                </div>

                <select class="custom-select w-25" wire:model.defer="category_id" id="inputGroupSelect01">
                  <option  selected>Elegir...</option>
                  @foreach ($category as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>

                  @endforeach
                </select>

              </div>  
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Días</span>
                </div>
                <div class="w-25 " >
             <input type="text" wire:model.defer="available_days" class="form-control border " type="number"  placeholder="" aria-label="Username" aria-describedby="basic-addon1">

                </div>

              </div>
              @error('available_days') <span name="error" value="false" class="error text-red-600">*Asegurece que el capo no este vacio, con números negarivos o menores que 1.</span> @enderror

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" wire:click="save" data-dismiss="modal">Agregar</button>
        </div>
      </div>
    </div>
  </div>
</div>
