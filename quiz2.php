<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Quiz 2</title>
</head>

<body class="bg-gray-100 p-8">
    <nav class="max-w-7xl mx-auto mb-6">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="flex justify-center space-x-4 p-4">
                <a href="quiz1.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 1</a>
                <a href="quiz2.php" class="px-4 py-2 bg-blue-700 text-white rounded-lg font-bold">Quiz 2</a>
                <a href="quiz3.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 3</a>
                <a href="quiz4.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 4</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th id="first_parameter" class="border border-gray-300 bg-gray-100 px-4 py-2 text-gray-700">100</th>
                                <th id="second_parameter" class="border border-gray-300 bg-gray-100 px-4 py-2 text-gray-700">7</th>
                                <th id="third_parameter" class="border border-gray-300 bg-gray-100 px-4 py-2 text-gray-700">107</th>
                                <th id="fourth_parameter" class="border border-gray-300 bg-gray-100 px-4 py-2 text-gray-700">3</th>
                                <th id="fifth_parameter" class="border border-gray-300 bg-gray-100 px-4 py-2 text-gray-700">104</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 p-2"><input type="number" id="first_input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></td>
                                <td class="border border-gray-300 p-2"><input type="number" id="second_input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></td>
                                <td class="border border-gray-300 p-2"><input type="number" id="third_input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></td>
                                <td class="border border-gray-300 p-2"><input type="number" id="fourth_input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></td>
                                <td class="border border-gray-300 p-2"><input type="number" id="fifth_input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-50 px-6 py-4 flex gap-4">
                    <button class="flex-1 px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out" id="btn_calculate">Calculate</button>
                    <button class="flex-1 px-6 py-2 bg-gray-500 text-white font-semibold rounded-lg hover:bg-gray-600 transition duration-200 ease-in-out" id="btn_clear">Clear</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    document.getElementById('btn_clear').addEventListener('click', function() {
        document.getElementById('first_input').value = '';
        document.getElementById('second_input').value = '';
        document.getElementById('third_input').value = '';
        document.getElementById('fourth_input').value = '';
        document.getElementById('fifth_input').value = '';
    });

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