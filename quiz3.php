<?php
$array_1 = [
    ['code' => 101, 'name' => 'AAA'],
    ['code' => 102, 'name' => 'BBB'],
    ['code' => 103, 'name' => 'CCC'],
    ['code' => 104, 'name' => 'DDD'],
];

$array_2 = [
    ['code' => 101, 'city' => 'Singapore'],
    ['code' => 102, 'city' => 'Bangkok'],
    ['code' => 103, 'city' => 'Tokyo'],
    ['code' => 104, 'city' => 'Seoul'],
];

$merged_array = [];
foreach ($array_1 as $item_1) {
    foreach ($array_2 as $item_2) {
        if ($item_1['code'] === $item_2['code']) {
            $merged_array[] = array_merge($item_1, $item_2);
        }
    }
}
// echo json_encode($merged_array);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100 p-8">
    <nav class="max-w-7xl mx-auto mb-6">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="flex justify-center space-x-4 p-4">
                <a href="quiz1.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 1</a>
                <a href="quiz2.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 2</a>
                <a href="quiz3.php" class="px-4 py-2 bg-blue-700 text-white rounded-lg font-bold">Quiz 3</a>
                <a href="quiz4.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 4</a>
            </div>
        </div>
    </nav>
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">ตารางแสดงข้อมูล</h1>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($merged_array as $item) : ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $item['code'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $item['name'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $item['city'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<!-- <script>
    function loadTableData() {
        // ดึงข้อมูลจากหน้าเดียวกัน
        const data = <?php echo json_encode($merged_array); ?>;
        const tbody = document.getElementById('table-body');
        tbody.innerHTML = ''; // ล้างข้อมูลก่อนเติมใหม่
        
        data.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.code}</td>
                <td>${row.name}</td>
                <td>${row.city}</td>
            `;
            tbody.appendChild(tr);
        });
    }

    document.addEventListener('DOMContentLoaded', loadTableData);
</script> -->