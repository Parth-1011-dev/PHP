<!DOCTYPE html>
<html>
<head><title>Simple PHP Calculator</title></head>
<body>
    <form method="POST" action="">
        <input type="number" step="any" name="num1" required value="<?php echo $_POST['num1'] ?? ''; ?>">
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" step="any" name="num2" required value="<?php echo $_POST['num2'] ?? ''; ?>">
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    // --- USER-DEFINED FUNCTIONS ---
    function addNumbers($x, $y) { return $x + $y; }
    function subtractNumbers($x, $y) { return $x - $y; }
    function multiplyNumbers($x, $y) { return $x * $y; }
    function divideNumbers($x, $y) { return ($y == 0) ? "Error: Division by zero!" : $x / $y; }

    // --- FORM PROCESSING ---
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operator'];

        switch ($op) {
            case 'add': $result = addNumbers($num1, $num2); break;
            case 'subtract': $result = subtractNumbers($num1, $num2); break;
            case 'multiply': $result = multiplyNumbers($num1, $num2); break;
            case 'divide': $result = divideNumbers($num1, $num2); break;
        }
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
