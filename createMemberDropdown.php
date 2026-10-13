<?php
$servername = "localhost";
$username = "root";
$password = "Pass4!";
$dbname = "mytennisclub";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

include("dbcon.php");

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<select name='MemeberID'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<option value='$id'>$id- $fn $sn</option>";
}
echo "</select>";

mysqli_close($conn);
?>