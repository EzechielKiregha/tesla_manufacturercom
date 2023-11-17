

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dash.css">
    <title>dashboard</title>
</head>
<body>
    <div class="container">
        <div class="words">
            <p>Dashboard</p>
        </div>
        <div class="Search">
            <input type="text" placeholder="search">
        </div>
    </div>
    <div class="boxes">
        <div class="box1">
            <p>name</p>
            <h2>$310.00</h2>
        </div>
        <div class="box2">
            <p>name</p>
            <h2>$310.00</h2>
        </div>
        <div class="box3">
            <p>name</p>
            <h2>$310.00</h2>
        </div>
    </div>
    <div class="chart">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <canvas id="myChart"></canvas>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              // Get the canvas element
              var ctx = document.getElementById('myChart').getContext('2d');
          
              // Your data for the chart (replace this with your actual data)
              var data = {
                labels: ['model X', 'model Y', 'model Z'],
                datasets: [{
                  label: 'tesla models',
                  data: [25, 45, 20],
                  backgroundColor: 'rgba(255, 99, 132, 0.1)', // Adjust the color as needed
                  borderColor: 'rgba(255, 99, 132, 1)', // Adjust the color as needed
                  borderWidth: 1
                }]
              };
          
              // Configuration for the chart
              var options = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                x: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                },
                y: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                }
            }
              };
          
              // Create the chart
              var myChart = new Chart(ctx, {
                type: 'bar', // Change this to the chart type you want (bar, line, etc.)
                data: data,
                options: options
              });
            });
          </script>

    </div>
    <div class="chart2">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <canvas id="myChart2"></canvas>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              // Get the canvas element
              var ctx = document.getElementById('myChart2').getContext('2d');
          
              // Your data for the chart (replace this with your actual data)
              var data = {
                labels: ['model X', 'model Y', 'model Z'],
                datasets: [{
                  label: 'sales',
                  data: [40, 30, 35],
                  backgroundColor: 'rgba(255, 99, 132, 0.1)', // Adjust the color as needed
                  borderColor: 'rgba(255, 99, 132, 1)', // Adjust the color as needed
                  borderWidth: 1,
                }]
              };
          
              // Configuration for the chart
              var options = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                x: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                },
                y: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                }
            }
              };
          
              // Create the chart
              var myChart = new Chart(ctx, {
                type: 'line', // Change this to the chart type you want (bar, line, etc.)
                data: data,
                options: options
              });
            });
          </script>

    </div>
    <div class="chart3">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <canvas id="myChart3"></canvas>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              // Get the canvas element
              var ctx = document.getElementById('myChart3').getContext('2d');
          
              // Your data for the chart (replace this with your actual data)
              var data = {
                labels: ['Asia', 'Africa', 'N.America', 'S.America','Europe'],
                datasets: [{
                  label: 'sales',
                  data: [40, 30, 23 ,60, 10],
                  backgroundColor: [
                'rgba(255, 99, 132, 0.1)',
                'rgba(54, 162, 235, 0.1)',
                'rgba(255, 206, 86, 0.1)',
                'rgba(75, 192, 192, 0.1)',
                'rgba(153, 102, 255, 0.1)'
              ], // Adjust the color as needed
                  borderColor: 'rgba(255, 99, 132, 1)', // Adjust the color as needed
                  borderWidth: 1
                }]
              };
          
              // Configuration for the chart
              var options = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                x: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                },
                y: {
                    ticks: {
                        color: 'white', // Set the label color to white
                    }
                }
            }
              };
          
              // Create the chart
              var myChart = new Chart(ctx, {
                type: 'pie', // Change this to the chart type you want (bar, line, etc.)
                data: data,
                options: options
              });
            });
          </script>

    </div>
    <div class="side-section">
        <h4>Logged In Users and Their Tesla Models</h4>
        <table id="userTable">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Tesla Model</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be added dynamically using JavaScript -->
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>  

    
</body>
</html>
