<?php
$conn = new mysqli("localhost", "root", "", "sql_demo");

$result = $conn->query("SELECT VERSION() AS version");
$row = $result->fetch_assoc();

echo "<h2>MySQL VERSION()</h2>";
echo "Database Version: " . $row['version'];
?>
