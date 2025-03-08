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
        echo "<p><strong>Integers:</strong> " . htmlspecialchars($_GET['numbers']) . "</p>";
        echo "<p><strong>Threshold:</strong> " . htmlspecialchars($_GET['threshold']) . "</p>";
        echo "<p><strong>Bitwise AND:</strong> " . $result['bitwise_and'] . "</p>";
        echo "<p><strong>Bitwise OR:</strong> " . $result['bitwise_or'] . "</p>";
        echo "<p><strong>Bitwise XOR:</strong> " . $result['bitwise_xor'] . "</p>";
        echo "<p><strong>Numbers greater than threshold:</strong> [" . implode(", ", $result['filtered_numbers']) . "]</p>";
    }
} else {
    echo "<h3>Error: Please provide numbers and a threshold.</h3>";
}
?>
