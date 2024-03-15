<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Charts</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Pie Chart on the left side -->
            <div class="col-sm-6">
                <canvas id="pieChart" width="100" height="100"></canvas> <!-- Adjusted width and height -->
            </div>
            <!-- Bar Chart on the right side -->
            <div class="col-sm-6">
                <canvas id="barChart" width="100" height="100"></canvas> <!-- Adjusted width and height -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, for some Bootstrap features) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JavaScript code for initializing charts -->
    <script>
        // Initialize pie chart
        var pieChartCtx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(pieChartCtx, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: 'Room Numbers',
                    data: [],
                    backgroundColor: [],
                    borderColor: [],
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

        // Initialize bar chart
        var barChartCtx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(barChartCtx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Room Numbers',
                    data: [],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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

        // Fetch data from PHP script and update charts
        function fetchDataAndUpdateCharts() {
            fetch('data.php')
                .then(response => response.json())
                .then(data => {
                    // Data received, update pie chart
                    pieChart.data.labels = data.room_data.map(room => room.name);
                    pieChart.data.datasets[0].data = data.room_data.map(room => room.number);
                    pieChart.data.datasets[0].backgroundColor = [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ];
                    pieChart.data.datasets[0].borderColor = [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ];
                    pieChart.update();

                    // Data received, update bar chart
                    barChart.data.labels = data.room_data.map(room => room.name);
                    barChart.data.datasets[0].data = data.room_data.map(room => room.number);
                    barChart.update();
                });
        }

        // Initial chart update
        fetchDataAndUpdateCharts();

        // Update charts every 3 seconds
        setInterval(fetchDataAndUpdateCharts, 3000);
    </script>
</body>
</html>
