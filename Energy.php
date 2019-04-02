<html>
    <head>
        <?php
            require_once 'support.php';
        ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $('#energy').removeClass('white-text').addClass('grey-text');
                $('.materialboxed').materialbox();
            });
        </script>
        
        <style type="text/css">
            body{
                font-family: 'Roboto' !important;
                font-weight: lighter !important;
            }
            
        </style>
    </head>
    <body>
        <?php
            require_once './topnav.php';
            require_once './sidenav.php';
            require_once './tabs.php';
        ?>
        <h6 class="center grey-text">Area Energy Level</h6>
        <canvas id="areaChart"></canvas>
        <h6 class="center grey-text">Infrastructure Energy Level</h6>
        <canvas id="infraChart"></canvas>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script>
            var area = document.getElementById('areaChart').getContext('2d');
            var chart = new Chart(area, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Positive',
                        backgroundColor: 'rgba(255, 99, 132,.5)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [0, 10, 5, 2, 20, 30, 10]
                    },
                    {
                        label: 'Negative',
                        backgroundColor: 'rgba(0,128,0,.5)',
                        borderColor: 'rgb(0,128,0)',
                        data: [20, 80, 50, 20, 30, 50, 45]
                    }]
                },

                // Configuration options go here
                options: {}
            });
            new Chart(document.getElementById("infraEnergy"),{"type":"bar","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"My First Dataset","data":[65,59,80,81,56,55,40],"fill":false,"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
        </script>
</html>

