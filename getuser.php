<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">

table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}	

</style>
<body>

<?php

$q= intval($_GET['q']);

$conn = mysqli_connect('localhost', 'root', '', 'MyDB') or die("unable to connect");

$sql = "SELECT * FROM ajax_users WHERE id = '$q' ";
$result = mysqli_query($conn, $sql);

echo "<table>

<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while ($row = mysqli_fetch_array($result)){
	echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($conn);

?>

</body>
</html>