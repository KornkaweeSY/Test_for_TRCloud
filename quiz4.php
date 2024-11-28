<?php
/* $city = [];
$population = [];
$country = [];

if (isset($_POST['data'])) {
    $data_1 = [
        ["City" => "Chongqing", "Population" => "30165500", "Country" => "China"],
        ["City" => "Shanghai", "Population" => "24183300", "Country" => "China"], 
        ["City" => "Beijing", "Population" => "21707000", "Country" => "China"],
        ["City" => "Istanbul", "Population" => "15029231", "Country" => "Turkey"],
        ["City" => "Karachi", "Population" => "14910352", "Country" => "Pakistan"],
        ["City" => "Dhaka", "Population" => "14399000", "Country" => "Bangladesh"],
        ["City" => "Moscow", "Population" => "13200000", "Country" => "Russia"],
        ["City" => "Guangzhou", "Population" => "13081000", "Country" => "China"],
        ["City" => "Shenzhen", "Population" => "12528300", "Country" => "China"],
        ["City" => "Mumbai", "Population" => "12528300", "Country" => "India"]
    ];

    $city = array_column($data_1, "City");
    $population = array_column($data_1, "Population");
    $country = array_column($data_1, "Country");
}

print_r($city);

echo json_encode(["city" => $city, "population" => $population, "country" => $country]); */

include "./API/quiz4.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Chart Js</title>
</head>

<body>
    <div class="container">
        <h1>Population of the World's Largest Cities</h1>
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $.ajax({
            url: "./API/quiz4.php",
            method: "POST",
            data: {
                data: true
            },
            success: function(data) {
                const chartData = JSON.parse(data);

                new Chart(document.getElementById('myChart'), {
                    type: 'bar',
                    data: {
                        labels: chartData.city,
                        datasets: [{
                            label: 'Population',
                            data: chartData.population,
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
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
            }
        });
    });
</script>