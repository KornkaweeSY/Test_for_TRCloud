<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Quiz 1</title>
</head>
<body class="bg-gray-100 p-8">
    <nav class="max-w-7xl mx-auto mb-6">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="flex justify-center space-x-4 p-4">
                <a href="quiz1.php" class="px-4 py-2 bg-blue-700 text-white rounded-lg font-bold">Quiz 1</a>
                <a href="quiz2.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 2</a>
                <a href="quiz3.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 3</a>
                <a href="quiz4.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">Quiz 4</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-bold text-gray-800 mb-3">Triangle Generator</h1>
                    <div class="flex gap-4">
                        <input type="number" id="test_triangle" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out" id="btn_test_triangle">Generate</button>
                    </div>
                </div>
                <div id="result_triangle" class="p-6 bg-gray-50">
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    document.getElementById('btn_test_triangle').addEventListener('click', function() {
        const input_triangle = parseInt(document.getElementById('test_triangle').value, 10);

        let output = '';

        if (input_triangle % 2 === 0) {
            for (let i = 1; i <= input_triangle; i++) {
                output += '*'.repeat(i) + '<br>';
            }
        } else {
            for (let i = input_triangle; i >= 0; i--) {
                output += '*'.repeat(i) + '<br>';
            }
        }

        document.getElementById('result_triangle').innerHTML = output;
    });
</script>