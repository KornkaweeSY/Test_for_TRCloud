<div class="container-fluid">
    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <h1>test</h1>
                <input type="number" id="test_triangle">
                <button class="btn btn-primary" id="btn_test_triangle">submit</button>
            </div>
            <div id="result_triangle"></div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btn_test_triangle').addEventListener('click', function() {
        const input_triangle = parseInt(document.getElementById('test_triangle').value, 10);

        let output = '';

        if (input_triangle % 2 === 0) {
            // สร้างสามเหลี่ยมเพิ่มขึ้น
            for (let i = 1; i <= input_triangle; i++) {
                output += '*'.repeat(i) + '<br>';
            }
        } else {
            // สร้างสามเหลี่ยมลดลง
            for (let i = input_triangle; i > 0; i--) {
                output += '*'.repeat(i) + '<br>';
            }
        }

        document.getElementById('result_triangle').innerHTML = output;
    });
</script>
