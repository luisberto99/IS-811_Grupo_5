<div class="vh-100">
    Aqui se mostraran graficas estadisticas.

    <div class="w-50 h-50">
        <canvas id="myChart" width="400" height="400">    </canvas>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script>

        const labelsMeses = <?php echo json_encode($meses); ?>;

        const Data1 = <?php echo json_encode($nAdverts); ?>;


    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labelsMeses,
            datasets: [{
                label: 'Numero de denuncias de anuncios',
                data: Data1,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
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
            responsive: true,
            plugins:{
                title:{
                    display: true,
                    text: 'Publicaciones del ultimo año'
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</div>
