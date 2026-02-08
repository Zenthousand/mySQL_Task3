<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            hire_date,
            CAST(hire_date AS CHAR) AS HireDateAsText,
            CAST(hire_date AS DATETIME) AS HireDateAsDateTime
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Convert Hire Date Using CAST()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Original Hire Date</th>
            <th>CAST(hire_date AS CHAR)</th>
            <th>CAST(hire_date AS DATETIME)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['hire_date']}</td>
                <td>{$row['HireDateAsText']}</td>
                <td>{$row['HireDateAsDateTime']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
