<?php
$conn = new mysqli("localhost", "root", "", "sql_demo");

$result = $conn->query("SELECT DATABASE() AS db_name");
$row = $result->fetch_assoc();

echo "<h2>DATABASE()</h2>";
echo "Current Database: " . $row['db_name'];
?>
