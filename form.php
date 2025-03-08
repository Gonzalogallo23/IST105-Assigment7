<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operations Form</title>
</head>
<body>
    <h2>Enter a list of integers separated by commas</h2>
    <form action="process.php" method="get">
        <label for="numbers">Numbers:</label>
        <input type="text" id="numbers" name="numbers" required>
        <br><br>
        <label for="threshold">Threshold:</label>
        <input type="number" id="threshold" name="threshold" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
