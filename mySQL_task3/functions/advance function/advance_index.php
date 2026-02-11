<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sql_demo";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advanced SQL Functions Demo</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; vertical-align: top; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Advanced SQL Functions Demonstration</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>BIN()</td>
        <td>Converts a number to binary format</td>
        <td>SELECT salary, BIN(salary) FROM employees;</td>
        <td><a href="bin.php">View Output</a></td>
    </tr>

    <tr>
        <td>BINARY</td>
        <td>Performs case-sensitive comparison</td>
        <td>SELECT * FROM employees WHERE BINARY department = 'IT';</td>
        <td><a href="binary.php">View Output</a></td>
    </tr>

    <tr>
        <td>CASE</td>
        <td>Conditional logic (IF–ELSE)</td>
        <td>
            CASE <br>
            WHEN salary >= 60000 THEN 'High' <br>
            ELSE 'Low' <br>
            END
        </td>
        <td><a href="case.php">View Output</a></td>
    </tr>

    <tr>
        <td>CAST()</td>
        <td>Converts one data type to another</td>
        <td>SELECT CAST(salary AS SIGNED) FROM employees;</td>
        <td><a href="cast.php">View Output</a></td>
    </tr>

    <tr>
        <td>COALESCE()</td>
        <td>Returns the first non-NULL value</td>
        <td>SELECT COALESCE(department, 'N/A') FROM employees;</td>
        <td><a href="coalesce.php">View Output</a></td>
    </tr>

    <tr>
        <td>CONNECTION_ID()</td>
        <td>Returns the current database connection ID</td>
        <td>SELECT CONNECTION_ID();</td>
        <td><a href="connection_id.php">View Output</a></td>
    </tr>

    <tr>
        <td>CONV()</td>
        <td>Converts numbers between different bases</td>
        <td>SELECT CONV(salary, 10, 2) FROM employees;</td>
        <td><a href="conv.php">View Output</a></td>
    </tr>

    <tr>
        <td>CONVERT()</td>
        <td>Converts a value to another data type</td>
        <td>SELECT CONVERT(salary, CHAR) FROM employees;</td>
        <td><a href="convert.php">View Output</a></td>
    </tr>

    <tr>
        <td>DATABASE()</td>
        <td>Returns the current database name</td>
        <td>SELECT DATABASE();</td>
        <td><a href="database.php">View Output</a></td>
    </tr>

    <tr>
        <td>IF()</td>
        <td>Conditional logic using true/false</td>
        <td>SELECT IF(salary >= 60000, 'High', 'Low') FROM employees;</td>
        <td><a href="if.php">View Output</a></td>
    </tr>

    <tr>
        <td>IFNULL()</td>
        <td>Replaces NULL with a specified value</td>
        <td>SELECT IFNULL(department, 'None') FROM employees;</td>
        <td><a href="null_functions.php">View Output</a></td>
    </tr>

    <tr>
        <td>ISNULL()</td>
        <td>Checks if a value is NULL</td>
        <td>SELECT ISNULL(department) FROM employees;</td>
        <td><a href="null_functions.php">View Output</a></td>
    </tr>

    <tr>
        <td>NULLIF()</td>
        <td>Returns NULL if two values are equal</td>
        <td>SELECT NULLIF(salary, 50000) FROM employees;</td>
        <td><a href="null_functions.php">View Output</a></td>
    </tr>

    <tr>
        <td>LAST_INSERT_ID()</td>
        <td>Returns the last auto-increment ID</td>
        <td>SELECT LAST_INSERT_ID();</td>
        <td><a href="last_insert_id.php">View Output</a></td>
    </tr>

    <tr>
        <td>CURRENT_USER()</td>
        <td>Returns the authenticated MySQL user</td>
        <td>SELECT CURRENT_USER();</td>
        <td><a href="user_info.php">View Output</a></td>
    </tr>

    <tr>
        <td>SESSION_USER()</td>
        <td>Returns the session user</td>
        <td>SELECT SESSION_USER();</td>
        <td><a href="user_info.php">View Output</a></td>
    </tr>

    <tr>
        <td>SYSTEM_USER()</td>
        <td>Returns the system user</td>
        <td>SELECT SYSTEM_USER();</td>
        <td><a href="user_info.php">View Output</a></td>
    </tr>

    <tr>
        <td>USER()</td>
        <td>Returns the MySQL username and host</td>
        <td>SELECT USER();</td>
        <td><a href="user_info.php">View Output</a></td>
    </tr>

    <tr>
        <td>VERSION()</td>
        <td>Returns the MySQL version</td>
        <td>SELECT VERSION();</td>
        <td><a href="version.php">View Output</a></td>
    </tr>

</table>

</body>
</html>
