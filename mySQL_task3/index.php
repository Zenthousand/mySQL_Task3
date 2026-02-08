<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions</title>

    <style>
        
    </style>

</head>
<body>

<?php
$sql = "SELECT id, first_name, last_name, department, salary, hire_date FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Employee List</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Hire Date</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['department']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['hire_date']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();

?>

<table border="1">
    <br> <br>

    <h2>String Functions</h2>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Example Query</th>
        <th>Output</th>

<tr>
    <td>ASCII</td>
    <td>Return the ASCII value of the first character</td>
    <td><code>SELECT ASCII(first_name) AS NumCodeOfFirstChar FROM employees;</code></td>
    <td><a href="functions/string functions/ascii.php">View Output</a></td>
</tr>

<tr>
    <td>CHAR_LENGTH</td>
    <td>Return the character length of a string</td>
    <td><code>SELECT CHAR_LENGTH(first_name) AS NameLength FROM employees;</code></td>
    <td><a href="functions/string functions/char_length.php">View Output</a></td>
</tr>

<tr>
    <td>CHARACTER_LENGTH</td>
    <td>Return the character length of a string</td>
    <td><code>SELECT CHAR_LENGTH(last_name) AS NameLength FROM employees;</code></td>
    <td><a href="functions/string functions/character_length.php">View Output</a></td>
</tr>

<tr>
    <td>CONCAT</td>
    <td>Concatenate strings</td>
    <td><code>SELECT CONCAT(first_name, ' ', last_name) AS FullName FROM employees;</code></td>
    <td><a href="functions/string functions/concat.php">View Output</a></td>
</tr>

<tr>
    <td>CONCAT_WS</td>
    <td>Concatenate strings with a separator</td>
    <td><code>SELECT CONCAT_WS(' - ', first_name, last_name, department) AS FullNameWithDept FROM employees;</code></td>
    <td><a href="functions/string functions/concat_ws.php">View Output</a></td>
</tr>

<tr>
    <td>FIELD</td>
    <td>Returns the index position of a value in a list of values</td>
    <td><code>SELECT FIELD(department, 'IT', 'HR', 'Finance', 'Sales', 'Marketing', 'Accounting') AS DeptRank FROM employees;</code></td>
    <td><a href="functions/string functions/field.php">View Output</a></td>
</tr>

<tr>
    <td>FIND_IN_SET</td>
    <td>Returns the index position of a value in a comma-separated list</td>
    <td><code>SELECT FIND_IN_SET(department, 'HR,Finance,IT,Sales,Marketing,Accounting') AS DeptPosition FROM employees;</code></td>
    <td><a href="functions/string functions/find_in_set.php">View Output</a></td>
</tr>

<tr>
    <td>FORMAT</td>
    <td>Formats a number to a specified number of decimal places and adds comma separators</td>
    <td><code>SELECT FORMAT(salary, 2) AS FormattedSalary FROM employees;</code></td>
    <td><a href="functions/string functions/format.php">View Output</a></td>
</tr>

<tr>
    <td>INSERT</td>
    <td>Inserts a new row into a table</td>
    <td><code>INSERT INTO employees (first_name, last_name, department, salary, hire_date) VALUES ('John', 'Doe', 'IT', 50000.00, '2023-01-15');</code></td>
    <td><a href="functions/string functions/insert.php">View Output</a></td>
</tr>

<tr>
    <td>INSTR</td>
    <td>Returns the position of a substring in a string</td>
    <td><code>SELECT INSTR(first_name, 'a') AS PositionOfA FROM employees;</code></td>
    <td><a href="functions/string functions/instr.php">View Output</a></td>
</tr>

<tr>
    <td>LCASE</td>
    <td>Returns the first_name in lowercase</td>
    <td><code>SELECT LCASE(first_name) AS LowerFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/lcase.php">View Output</a></td>
</tr>

<tr>
    <td>LEFT</td>
    <td>Returns the first 3 characters of first_name</td>
    <td><code>SELECT LEFT(first_name, 3) AS First3Chars FROM employees;</code></td>
    <td><a href="functions/string functions/left.php">View Output</a></td>
</tr>

<tr>
    <td>LENGTH</td>
    <td>Returns the length of first_name in bytes</td>
    <td><code>SELECT LENGTH(first_name) AS NameLength FROM employees;</code></td>
    <td><a href="functions/string functions/length.php">View Output</a></td>
</tr>

<tr>
    <td>LOCATE</td>
    <td>Returns the position of a substring in a string</td>
    <td><code>SELECT LOCATE('a', first_name) AS PositionOfA FROM employees;</code></td>
    <td><a href="functions/string functions/locate.php">View Output</a></td>
</tr>

<tr>
    <td>LOWER</td>
    <td>Returns the last_name in lowercase</td>
    <td><code>SELECT LOWER(last_name) AS LowerLastName FROM employees;</code></td>
    <td><a href="functions/string functions/lower.php">View Output</a></td>
</tr>

<tr>
    <td>LPAD</td>
    <td>Returns first_name left-padded with '*' to a total length of 10 characters</td>
    <td><code>SELECT LPAD(first_name, 10, '*') AS PaddedFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/lpad.php">View Output</a></td>
</tr>

<tr>
    <td>LTRIM</td>
    <td>Returns first_name with leading spaces removed</td>
    <td><code>SELECT LTRIM(first_name) AS TrimmedFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/ltrim.php">View Output</a></td>
</tr>

<tr>
    <td>MID</td>
    <td>Returns 3 characters from the middle of first_name, starting at position 2</td>
    <td><code>SELECT MID(first_name, 2, 3) AS MidFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/mid.php">View Output</a></td>
</tr>

<tr>
    <td>POSITION</td>
    <td>Returns the position of a substring in a string</td>
    <td><code>SELECT POSITION('a' IN first_name) AS PositionOfA FROM employees;</code></td>
    <td><a href="functions/string functions/position.php">View Output</a></td>
</tr>

<tr>
    <td>REPEAT</td>
    <td>Repeats a string a specified number of times</td>
    <td><code>SELECT REPEAT(first_name, 3) AS RepeatedName FROM employees;</code></td>
    <td><a href="functions/string functions/repeat.php">View Output</a></td>
</tr>

<tr>
    <td>REPLACE</td>
    <td>Replaces all occurrences of a substring with another substring</td>
    <td><code>SELECT REPLACE(first_name, 'a', '$') AS ReplacedName FROM employees;</code></td>
    <td><a href="functions/string functions/replace.php">View Output</a></td>
</tr>

<tr>
    <td>REVERSE</td>
    <td>Returns the reversed version of first_name</td>
    <td><code>SELECT REVERSE(first_name) AS ReversedName FROM employees;</code></td>
    <td><a href="functions/string functions/reverse.php">View Output</a></td>
</tr>

<tr>
    <td>RIGHT</td>
    <td>Returns the last 3 characters of first_name</td>
    <td><code>SELECT RIGHT(first_name, 3) AS Last3Chars FROM employees;</code></td>
    <td><a href="functions/string functions/right.php">View Output</a></td>
</tr>

<tr>
    <td>RPAD</td>
    <td>Returns first_name right-padded with '*' to a total length of 10 characters</td>
    <td><code>SELECT RPAD(first_name, 10, '*') AS PaddedFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/rpad.php">View Output</a></td>
</tr>

<tr>
    <td>RTRIM</td>
    <td>Returns first_name with trailing spaces removed</td>
    <td><code>SELECT RTRIM(first_name) AS TrimmedFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/rtrim.php">View Output</a></td>
</tr>

<tr>
    <td>SPACE</td>
    <td>Returns a string of 5 spaces</td>
    <td><code>SELECT SPACE(5) AS FiveSpaces FROM employees;</code></td>
    <td><a href="functions/string functions/space.php">View Output</a></td>
</tr>

<tr>
    <td>STRCMP</td>
    <td>Returns the comparison result of first_name with 'John'</td>
    <td><code>SELECT STRCMP(first_name, 'John') AS CompareWithJohn FROM employees;</code></td>
    <td><a href="functions/string functions/strcmp.php">View Output</a></td>
</tr>

<tr>
    <td>SUBSTR</td>
    <td>Returns a substring of first_name starting at position 2 with a length of 3 characters</td>
    <td><code>SELECT SUBSTR(first_name, 2, 3) AS SubstringName FROM employees;</code></td>
    <td><a href="functions/string functions/substr.php">View Output</a></td>
</tr>

<tr>
    <td>SUBSTRING</td>
    <td>Returns a substring of first_name starting at position 2 with a length of 4 characters</td>
    <td><code>SELECT SUBSTRING(first_name, 2, 4) AS SubstringName FROM employees;</code></td>
    <td><a href="functions/string functions/substring.php">View Output</a></td>
</tr>

<tr>
    <td>SUBSTRING_INDEX</td>
    <td>Returns a substring of first_name before the first occurrence of 'a'</td>
    <td><code>SELECT SUBSTRING_INDEX(first_name, 'a', 1) AS SubstringBeforeA FROM employees;</code></td>
    <td><a href="functions/string functions/substring_index.php">View Output</a></td>
</tr>

<tr>
    <td>TRIM</td>
    <td>Returns first_name with leading and trailing spaces removed</td>
    <td><code>SELECT TRIM(first_name) AS TrimmedFirstName FROM employees;</code></td>
    <td><a href="functions/string functions/trim.php">View Output</a></td>
</tr>

<tr>
    <td>UCASE</td>
    <td>Returns first_name in uppercase</td>
    <td><code>SELECT UCASE(first_name) AS UpperName FROM employees;</code></td>
    <td><a href="functions/string functions/ucase.php">View Output</a></td>
</tr>

<tr>
    <td>UPPER</td>
    <td>Returns first_name in uppercase</td>
    <td><code>SELECT UPPER(first_name) AS UpperName FROM employees;</code></td>
    <td><a href="functions/string functions/upper.php">View Output</a></td>
</tr>

</table>

<table border="1">
    <br> <br>

    <h2>Numeric Functions</h2>
<tr>
        <th>Function</th>
        <th>Description</th>
        <th>Example Query</th>
        <th>Output</th>
</tr>

<tr>
    <td>ABS</td>
    <td>Returns the absolute value of salary</td>
    <td><code>SELECT ABS(salary) AS AbsoluteSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/abs.php">View Output</a></td>
</tr>

<tr>
    <td>ACOS</td>
    <td>Returns the arc cosine of a value</td>
    <td><code>SELECT ACOS(LEAST(1, GREATEST(-1, salary / 10000))) AS ArcCosSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/acos.php">View Output</a></td>
</tr>

<tr>
    <td>ASIN</td>
    <td>Returns the arc sine of a value</td>
    <td><code>SELECT ASIN(LEAST(1, GREATEST(-1, salary / 10000))) AS ArcSinSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/asin.php">View Output</a></td>
</tr>

<tr>
    <td>ATAN</td>
    <td>Returns the arc tangent of a value</td>
    <td><code>SELECT ATAN(salary / 10000) AS ArcTanSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/atan.php">View Output</a></td>
</tr>

<tr>
    <td>ATAN2</td>
    <td>Returns the arc tangent of two values (y and x)</td>
    <td><code>SELECT ATAN2(salary, id) AS ArcTan2Value FROM employees;</code></td>
    <td><a href="functions/numeric functions/atan2.php">View Output</a></td>
</tr>

<tr>
    <td>AVG</td>
    <td>Returns the average salary of all employees</td>
    <td><code>SELECT AVG(salary) AS AverageSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/avg.php">View Output</a></td>
</tr>

<tr>
    <td>CEIL</td>
    <td>Returns the smallest integer greater than or equal to salary</td>
    <td><code>SELECT CEIL(salary) AS CeilSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/ceil.php">View Output</a></td>     
</tr>

<tr>
    <td>CEILING</td>
    <td>Returns the smallest integer greater than or equal to salary</td>
    <td><code>SELECT CEILING(salary) AS CeilingSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/ceiling.php">View Output</a></td>
</tr>

<tr>
    <td>COS</td>
    <td>Returns the cosine of a value (in radians)</td>
    <td><code>SELECT COS(salary / 10000) AS CosineSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/cos.php">View Output</a></td>
</tr>

<tr>
    <td>COT</td>
    <td>Returns the cotangent of a value (in radians)</td>
    <td><code>SELECT COT(salary / 10000) AS CotangentSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/cot.php">View Output</a></td>
</tr>

<tr>
    <td>COUNT</td>
    <td>Returns the total number of employees</td>
    <td><code>SELECT COUNT(*) AS TotalEmployees FROM employees;</code></td>
    <td><a href="functions/numeric functions/count.php">View Output</a></td>
</tr>

<tr>
    <td>DEGREES</td>
    <td>Converts radians to degrees</td>
    <td><code>SELECT DEGREES(salary / 10000) AS DegreesSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/degrees.php">View Output</a></td>
</tr>

<tr>
    <td>DIV</td>
    <td>Performs integer division of salary by 200</td>
    <td><code>SELECT salary DIV 200 AS SalaryDivided FROM employees;</code></td>
    <td><a href="functions/numeric functions/div.php">View Output</a></td>  
</tr>

<tr>
    <td>EXP</td>
    <td>Returns e raised to the power of (salary / 1000)</td>
    <td><code>SELECT EXP(salary / 1000) AS ExpSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/exp.php">View Output</a></td>
</tr>

    <td>FLOOR</td>
    <td>Returns the largest integer less than or equal to salary</td>
    <td><code>SELECT FLOOR(salary) AS FloorSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/floor.php">View Output</a></td>
</tr>

<tr>
    <td>GREATEST</td>
    <td>Returns the greatest value among salary, id*1000, and 10000</td>
    <td><code>SELECT GREATEST(salary, id * 1000, 10000) AS GreatestValue FROM employees;</code></td>
    <td><a href="functions/numeric functions/greatest.php">View Output</a></td>
</tr>

<tr>
    <td>LEAST</td>
    <td>Returns the least value among salary, id*1000, and 10000</td>
    <td><code>SELECT LEAST(salary, id * 1000, 10000) AS LeastValue FROM employees;</code></td>
    <td><a href="functions/numeric functions/least.php">View Output</a></td>
</tr>

<tr>
    <td>LN</td>
    <td>Returns the natural logarithm of salary</td>
    <td><code>SELECT LN(salary) AS NaturalLogSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/ln.php">View Output</a></td>
</tr>

<tr>
    <td>LOG</td>
    <td>Returns the logarithm base 10 of salary</td>
    <td><code>SELECT LOG(salary) AS LogBase10Salary FROM employees;</code></td>
    <td><a href="functions/numeric functions/log.php">View Output</a></td>
</tr>

<tr>
    <td>LOG10</td>
    <td>Returns the logarithm base 10 of salary</td>
    <td><code>SELECT LOG10(salary) AS Log10Salary FROM employees;</code></td>
    <td><a href="functions/numeric functions/log10.php">View Output</a></td>
</tr>

<tr>
    <td>LOG2</td>
    <td>Returns the logarithm base 2 of salary</td>
    <td><code>SELECT LOG2(salary) AS Log2Salary FROM employees;</code></td>
    <td><a href="functions/numeric functions/log2.php">View Output</a></td>
</tr>

<tr>
    <td>MAX</td>
    <td>Returns the maximum salary in the employees table</td>
    <td><code>SELECT MAX(salary) AS MaxSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/max.php">View Output</a></td>
</tr>

<tr>
    <td>MIN</td>
    <td>Returns the minimum salary in the employees table</td>
    <td><code>SELECT MIN(salary) AS MinSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/min.php">View Output</a></td>
</tr>

<tr>
    <td>MOD</td>
    <td>Returns the remainder of salary divided by 1000</td>
    <td><code>SELECT MOD(salary, 1000) AS SalaryMod FROM employees;</code></td>
    <td><a href="functions/numeric functions/mod.php">View Output</a></td>
</tr>

<tr>
    <td>PI</td>
    <td>Returns the value of PI</td>
    <td><code>SELECT PI() AS PiValue FROM employees;</code></td>
    <td><a href="functions/numeric functions/pi.php">View Output</a></td>
</tr>

<tr>
    <td>POW</td>
    <td>Returns salary raised to the power of 2</td>
    <td><code>SELECT POW(salary, 2) AS SalarySquared FROM employees;</code></td>
    <td><a href="functions/numeric functions/pow.php">View Output</a></td>
</tr>

<tr>
    <td>POWER</td>
    <td>Returns salary raised to the power of 3</td>
    <td><code>SELECT POWER(salary, 3) AS SalaryCubed FROM employees;</code></td>
    <td><a href="functions/numeric functions/power.php">View Output</a></td>
</tr>

    <td>RADIANS</td>
    <td>Converts degrees to radians</td>
    <td><code>SELECT RADIANS(salary / 10000) AS RadiansSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/radians.php">View Output</a></td>
</tr>   

<tr>
    <td>RAND</td>
    <td>Returns a random floating-point value between 0 and 1 for each employee</td>
    <td><code>SELECT RAND() AS RandomValue FROM employees;</code></td>
    <td><a href="functions/numeric functions/rand.php">View Output</a></td>
</tr>

    <td>ROUND</td>
    <td>Rounds salary to 0 and 2 decimal places</td>
    <td><code>SELECT ROUND(salary) AS RoundedSalary, ROUND(salary,  2) AS RoundedTwoDecimals FROM employees;</code></td>
    <td><a href="functions/numeric functions/round.php">View Output</a></td>
</tr>   

<tr>
    <td>SIGN</td>
    <td>Returns the sign of salary minus 10000</td>
    <td><code>SELECT SIGN(salary - 10000) AS SalarySign FROM employees;</code></td>
    <td><a href="functions/numeric functions/sign.php">View Output</a></td>
</tr>

<tr>
    <td>SIN</td>
    <td>Returns the sine of normalized salary (salary / 10000) in radians</td>
    <td><code>SELECT SIN(salary / 10000) AS SinSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/sin.php">View Output</a></td>
</tr>

<tr>
    <td>SQRT</td>
    <td>Returns the square root of salary</td>
    <td><code>SELECT SQRT(salary) AS SqrtSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/sqrt.php">View Output</a></td>
</tr>

<tr>
    <td>SUM</td>
    <td>Returns the total salary of all employees</td>
    <td><code>SELECT SUM(salary) AS TotalSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/sum.php">View Output</a></td>
</tr>

<tr>
    <td>TAN</td>
    <td>Returns the tangent of normalized salary (salary / 10000) in radians</td>
    <td><code>SELECT TAN(salary / 10000) AS TanSalary FROM employees;</code></td>
    <td><a href="functions/numeric functions/tan.php">View Output</a></td>
</tr>

<tr>
    <td>TRUNCATE</td>
    <td>Truncates salary to 0 and 2 decimal places</td>
    <td><code>SELECT TRUNCATE(salary, 0) AS TruncatedSalary, TRUNCATE(salary, 2) AS TruncatedTwoDecimals FROM employees;</code></td>
    <td><a href="functions/numeric functions/truncate.php">View Output</a></td>
</tr>


<!-- ikaw na bahala ani dria tej -->
<table border="1">
    <br> <br>

    <h2>Date Functions</h2>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Example Query</th>
        <th>Output</th>

</table>

<table border="1">
    <br> <br>

    <h2>Advanced Functions</h2>
    <tr>
        <th>Function</th>
        <th>Description</th>
        <th>Example Query</th>
        <th>Output</th>
    </tr>

<tr>
    <td>BIN</td>
    <td>Returns the binary representation of an integer</td>
    <td><code>SELECT BIN(id) AS BinaryID FROM employees;</code></td>
    <td><a href="functions/advanced functions/bin.php">View Output</a></td>
</tr>

<tr>
    <td>BINARY</td>
    <td>Returns the binary representation of an integer and a float</td>
    <td><code>SELECT BIN(id) AS BinaryID, BIN(FLOOR(salary)) AS BinarySalary FROM employees;</code></td>
    <td><a href="functions/advanced functions/binary.php">View Output</a></td>
</tr>

<tr>
    <td>CASE</td>
    <td>Categorizes employees based on their salary</td>
    <td><code>SELECT 
            id,
            first_name,
            salary,
            CASE
                WHEN salary >= 10000 THEN 'High Salary'
                WHEN salary >= 5000 THEN 'Average Salary'
                ELSE 'Low Salary'
            END AS SalaryCategory
        FROM employees;</code></td>
    <td><a href="functions/advanced functions/case.php">View Output</a></td>
</tr>

<tr>
    <td>CAST</td>
    <td>Converts hire_date into different data types</td>
    <td><code>SELECT 
            id,
            first_name,
            hire_date,
            CAST(hire_date AS DATE) AS HireDateAsDate,
            CAST(hire_date AS DATETIME) AS HireDateAsDateTime,
            CAST(hire_date AS CHAR) AS HireDateAsChar
        FROM employees;</code></td>
    <td><a href="functions/advanced functions/cast.php">View Output</a></td>
</tr>

</table>


</body>
</html>
