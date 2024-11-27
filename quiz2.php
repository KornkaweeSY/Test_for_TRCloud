<div class="container-fluid">
    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th id="first_parameter">100</th>
                        <th id="second_parameter">7</th>
                        <th id="third_parameter">107</th>
                        <th id="fourth_parameter">3</th>
                        <th id="fifth_parameter">104</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="" id="first_input"></td>
                            <td><input type="number" name="" id="second_input"></td>
                            <td><input type="number" name="" id="third_input"></td>
                            <td><input type="number" name="" id="fourth_input"></td>
                            <td><input type="number" name="" id="fifth_input"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" id="btn_calculate">Calculate</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btn_calculate').addEventListener('click', function() {
        const inputs = [
            parseFloat(document.getElementById('first_input').value) || null,
            parseFloat(document.getElementById('second_input').value) || null,
            parseFloat(document.getElementById('third_input').value) || null,
            parseFloat(document.getElementById('fourth_input').value) || null,
            parseFloat(document.getElementById('fifth_input').value) || null
        ];

        const parameters = [
            parseFloat(document.getElementById('first_parameter').innerText),
            parseFloat(document.getElementById('second_parameter').innerText),
            parseFloat(document.getElementById('third_parameter').innerText),
            parseFloat(document.getElementById('fourth_parameter').innerText),
            parseFloat(document.getElementById('fifth_parameter').innerText)
        ];

        let baseValue = null;
        let baseIndex = null;

        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i] !== null) {
                baseValue = inputs[i];
                baseIndex = i;
                break;
            }
        }

        if (baseValue !== null) {
            const results = parameters.map((param, index) => {
                return (baseValue / parameters[baseIndex]) * param;
            });

            document.getElementById('first_input').value = results[0].toFixed(2);
            document.getElementById('second_input').value = results[1].toFixed(2);
            document.getElementById('third_input').value = results[2].toFixed(2);
            document.getElementById('fourth_input').value = results[3].toFixed(2);
            document.getElementById('fifth_input').value = results[4].toFixed(2);
        } else {
            alert('กรุณากรอกค่าลงในช่องใดช่องหนึ่ง!');
        }
    });
</script>