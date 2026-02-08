<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            salary,
            CASE
                WHEN salary >= 10000 THEN 'High Salary'
                WHEN salary >= 5000 THEN 'Average Salary'
                ELSE 'Low Salary'
            END AS SalaryCategory
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Categorize Employees by Salary Using CASE</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Salary</th>
            <th>Salary Category (CASE)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['SalaryCategory']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
