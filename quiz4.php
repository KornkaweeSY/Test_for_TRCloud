<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Quiz 4</title>
</head>
<body class="bg-gray-100 p-8">
    <nav class="max-w-7xl mx-auto mb-6">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="flex justify-center space-x-4 p-4">
                <a href="quiz1.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 1</a>
                <a href="quiz2.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 2</a>
                <a href="quiz3.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 3</a>
                <a href="quiz4.php" class="px-4 py-2 bg-blue-700 text-white rounded-lg font-bold">Quiz 4</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-lg mb-4">
            <div class="bg-blue-600 p-4 rounded-t-lg">
                <h4 class="text-white font-bold">Population Distribution by City</h4>
            </div>
            <div class="p-4">
                <div class="w-full">
                    <div class="relative h-[60vh] w-full flex justify-center items-center">
                        <canvas id="myChart_1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg">
            <div class="bg-blue-600 p-4 rounded-t-lg">
                <h4 class="text-white font-bold">Population Distribution by City</h4>
            </div>
            <div class="p-4">
                <div class="w-full">
                    <div class="relative h-[60vh] w-full flex justify-center items-center">
                        <canvas id="myChart_2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    const ctx_1 = document.getElementById('myChart_1');
    const ctx_2 = document.getElementById('myChart_2');

    /* AJAX */
    const xmlhttp = new XMLHttpRequest();
    const url = 'https://www.trcloud.co/test/api.php';
    /* async */
    xmlhttp.open('GET', url, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            const data = JSON.parse(xmlhttp.responseText);
            const city = data.map(item => item.City);
            const populations = data.map(item => item.Population);
            const countries = data.map(item => item.Country);
            new Chart(ctx_1, {
                type: 'bar',
                data: {
                    labels: city,
                    datasets: [{
                        label: 'Range by country',
                        data: populations,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(199, 199, 199, 0.5)',
                            'rgba(83, 102, 255, 0.5)',
                            'rgba(40, 159, 64, 0.5)',
                            'rgba(210, 199, 199, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)',
                            'rgba(83, 102, 255, 1)',
                            'rgba(40, 159, 64, 1)',
                            'rgba(210, 199, 199, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            new Chart(ctx_2, {
                type: 'polarArea',
                data: {
                    labels: city,
                    datasets: [{
                        label: 'Population (Millions)',
                        data: populations.map(p => p/10000000),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)', 
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(199, 199, 199, 0.7)',
                            'rgba(83, 102, 255, 0.7)',
                            'rgba(40, 159, 64, 0.7)',
                            'rgba(210, 199, 199, 0.7)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)',
                            'rgba(83, 102, 255, 1)',
                            'rgba(40, 159, 64, 1)',
                            'rgba(210, 199, 199, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Population Distribution by City (in Millions)',
                            font: {
                                size: 16
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `${context.label}: ${(context.raw).toFixed(2)} Million`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateRotate: true,
                        animateScale: true
                    }
                }
            });
        }
    }
</script>