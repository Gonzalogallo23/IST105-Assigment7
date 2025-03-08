<?php
if (isset($_GET['numbers']) && isset($_GET['threshold'])) {
    $numbers = escapeshellarg($_GET['numbers']);
    $threshold = escapeshellarg($_GET['threshold']);

    $command = "python3 bitwise_operations.py $numbers $threshold";
    $output = shell_exec($command);
    
    $result = json_decode($output, true);

    if (isset($result['error'])) {
        echo "<h3>Error: " . htmlspecialchars($result['error']) . "</h3>";
    } else {
        echo "<h3>Results:</h3>";
        echo "<p>Bitwise AND: " . $result['bitwise_and'] . "</p>";
        echo "<p>Bitwise OR: " . $result['bitwise_or'] . "</p>";
        echo "<p>Bitwise XOR: " . $result['bitwise_xor'] . "</p>";
        echo "<p>Numbers greater than threshold: [" . implode(", ", $result['filtered_numbers']) . "]</p>";
    }
} else {
    echo "<h3>Error: Please provide numbers and a threshold.</h3>";
}
?>
