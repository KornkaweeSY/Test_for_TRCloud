<?php
/* $products = [
    ['name' => 'สินค้า A', 'price' => 100],
    ['name' => 'สินค้า B', 'price' => 200],
    ['name' => 'สินค้า C', 'price' => 300],
    ['name' => 'สินค้า D', 'price' => 400],
    ['name' => 'สินค้า E', 'price' => 500],
    ['name' => 'สินค้า F', 'price' => 600],
    ['name' => 'สินค้า G', 'price' => 700],
    ['name' => 'สินค้า H', 'price' => 800],
    ['name' => 'สินค้า I', 'price' => 900],
    ['name' => 'สินค้า J', 'price' => 1000],
    ['name' => 'สินค้า K', 'price' => 1100],
    ['name' => 'สินค้า L', 'price' => 1200],
    ['name' => 'สินค้า M', 'price' => 1300],
    ['name' => 'สินค้า N', 'price' => 1400],
    ['name' => 'สินค้า O', 'price' => 1500],
    ['name' => 'สินค้า P', 'price' => 1600],
    ['name' => 'สินค้า Q', 'price' => 1700],
    ['name' => 'สินค้า R', 'price' => 1800],
    ['name' => 'สินค้า S', 'price' => 1900],
    ['name' => 'สินค้า T', 'price' => 2000],
    ['name' => 'สินค้า U', 'price' => 2100],
    ['name' => 'สินค้า V', 'price' => 2200],
    ['name' => 'สินค้า W', 'price' => 2300],
    ['name' => 'สินค้า X', 'price' => 2400],
    ['name' => 'สินค้า Y', 'price' => 2500],
    ['name' => 'สินค้า Z', 'price' => 2600],
]; */

$products = [
    ['name' => 'สินค้า A', 'price' => 100],
    ['name' => 'สินค้า B', 'price' => 200],
    ['name' => 'สินค้า C', 'price' => 300],
    ['name' => 'สินค้า D', 'price' => 400],
    ['name' => 'สินค้า E', 'price' => 500],
    ['name' => 'สินค้า F', 'price' => 600],
    ['name' => 'สินค้า G', 'price' => 700],
    ['name' => 'สินค้า H', 'price' => 800],
    ['name' => 'สินค้า I', 'price' => 900],
    ['name' => 'สินค้า J', 'price' => 1600],
    ['name' => 'สินค้า K', 'price' => 1100],
    ['name' => 'สินค้า L', 'price' => 1700],
    ['name' => 'สินค้า M', 'price' => 1300],
    ['name' => 'สินค้า N', 'price' => 1400],
    ['name' => 'สินค้า O', 'price' => 1500],
    ['name' => 'สินค้า P', 'price' => 2000],
    ['name' => 'สินค้า Q', 'price' => 1700],
    ['name' => 'สินค้า R', 'price' => 3000],
    ['name' => 'สินค้า S', 'price' => 1900],
    ['name' => 'สินค้า T', 'price' => 2000],
    ['name' => 'สินค้า U', 'price' => 2100],
    ['name' => 'สินค้า V', 'price' => 2200],
    ['name' => 'สินค้า W', 'price' => 2300],
    ['name' => 'สินค้า X', 'price' => 2400],
    ['name' => 'สินค้า Y', 'price' => 2500],
    ['name' => 'สินค้า Z', 'price' => 2600],
];

// sapceship operator
usort($products, function ($a, $b) {
    return $b['price'] <=> $a['price']; //กำหนดเงื่อนไขการเรียงลำดับ ให้ ราคา มากไปน้อย
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Best Seller Products sort </title>
</head>

<body>
    <nav>
        <a href="quiz1.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 1</a>
        <a href="quiz2.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 2</a>
        <a href="quiz3.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 3</a>
        <a href="quiz4.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 4</a>
    </nav>
    <h1>Best Seller Products</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
