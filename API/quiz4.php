<?php

// Initialize variables
$city = [];
$population = [];
$country = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data'])) {
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
echo json_encode(["city" => $city, "population" => $population, "country" => $country]);
?>