<div>
    
        <button type="submit" class="anuncio-eliminar px-4 bg-gray-600 p-3 rounded-lg text-white mr-2">Eliminar</button>
    
</div>


@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $('.anuncio-eliminar').submit(function(e){
            e.preventDefault();


            Swal.fire({
            title: '¿Quieres seguir con esta acción?',
            text: "Tu anuncio ya no se mostrará",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, continuar',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Hecho',
                'Su anuncio ha sido dado de baja.',
                'success'
              )
            }
          })
        });
        
        /*Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})*/
    </script>
@endsection