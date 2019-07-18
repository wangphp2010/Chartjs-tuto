<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div style="width:500px;">
        <canvas id="myChart" width="200" height="200"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line', // line bar polarArea  pie https://www.chartjs.org/docs/latest/charts/
                data: {
                    labels: ['小马', '大卫', '蓝静', '小明', '小白', '小飞'],
                    datasets: [{
                        label: 'the note of class',
                        data: [100, 84, 75, 70, 72, 85],
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
                    },
                    {
                        label: 'youku',
                        data: [150, 260, 470, 800, 940],
 
                    },

                    {
                        label: 'youtube',
                        data: [50, 200, 300, 780, 800],
 
                    }

                    
                    
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    tooltips: {
                        mode: 'y' //  x  ,  y 显示xy轴数据
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                }
            });
        </script>
    </div>
</body>

</html>