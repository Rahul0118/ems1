<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
error_reporting(0);
include('config.php');
session_start();
include('config.php');
$id=$_SESSION["eid"];
$result = mysql_query("SELECT * FROM employee  where id='".$id."'")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>EMP_ID</font></th>
<th><font color='Red'>EMP_ML</font></th>
<th><font color='Red'>EMP_CL</font></th>




</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';

echo '<td><b><font color="#663300">' . $row['ml'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['cl'] . '</font></b></td>';


echo "</tr>";

}

echo "</table>";
?>
<p><a href="emp1_main.php">GO BACK TO EMPLOYEE HOME</a></p>

</body>
</html>

