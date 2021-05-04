@extends('adminlte::page')

@section('title', 'Estadisticas Categorias')

{{-- @section ('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Estadisticas de categorias</h1>
@stop

@section('content')

 <div class="d-flex">
    <div class="card w-50 m-4">
        <div class="card-header">
             <h2 class="card-title">Numero de anuncios activos por categoria</h2>
             <div class="card-tools">
             </div>
        </div>
        <div class="card-body">
         <canvas id="advertsActive" width="400" height="400"></canvas>
        </div>
    </div>
    <div class="card w-50 m-4">
        <div class="card-header">
             <h2 class="card-title">Numero de anuncios por categoria</h2>
             <div class="card-tools">
                 
             </div>
        </div>
        <div class="card-body">
         <canvas id="adverts" width="400" height="400"></canvas>
        </div>
    </div>
 </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
<script>

const adverts = <?php echo json_encode($adverts); ?>;

categorias = [];
advertsCategoria = []
for (let i = 0; i < adverts.length; i++) {
    categorias.push(adverts[i].name);
    advertsCategoria.push(adverts[i].numero);
    
}

var adT = document.getElementById('adverts');
var ad = new Chart(adT, {
    type: 'bar',
    data: {
        labels: categorias,
        datasets: [{
            label: '',
            data: advertsCategoria,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
const advertsActive = <?php echo json_encode($advertsActive); ?>;
categoriasActive = [];
advertsCategoriaActive = []
for (let i = 0; i < advertsActive.length; i++) {
    categoriasActive.push(advertsActive[i].name);
    advertsCategoriaActive.push(advertsActive[i].numero);
    
}

var adActive = document.getElementById('advertsActive');
var ad = new Chart(adActive, {
    type: 'bar',
    data: {
        labels: categoriasActive,
        datasets: [{
            label: '',
            data: advertsCategoriaActive,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
@stop