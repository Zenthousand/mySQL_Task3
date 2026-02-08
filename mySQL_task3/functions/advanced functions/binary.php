<?php
include '../../db_connect.php';

// Use the BINARY() function to convert first_name to its binary string value
$sql = "SELECT 
            id,
            first_name,
            BINARY(first_name) AS BinaryForm
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Convert First Name to Binary String Using BINARY()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>BINARY(first_name)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        // Convert binary data to readable hex for display
        $binary = bin2hex($row['BinaryForm']);
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$binary}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
