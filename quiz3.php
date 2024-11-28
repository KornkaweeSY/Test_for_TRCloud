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

<div class="container-fluid">
    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <h1>ตารางแสดงข้อมูล</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php foreach ($merged_array as $item) : ?>
                            <tr>
                                <td><?= $item['code'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['city'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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