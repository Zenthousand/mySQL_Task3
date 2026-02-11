<?php
$conn = new mysqli("localhost", "root", "", "sql_demo");

$result = $conn->query("SELECT CONNECTION_ID() AS conn_id");
$row = $result->fetch_assoc();

echo "<h2>CONNECTION_ID()</h2>";
echo "Connection ID: " . $row['conn_id'];
?>
