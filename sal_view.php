<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
error_reporting(0);
include('config.php');

$result = mysql_query("SELECT * FROM sal")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>SAL_Id</font></th>
<th><font color='Red'>EMP_Id</font></th>
<th><font color='Red'>EMP_MS</font></th>
<th><font color='Red'>EMP_DS</font></th>
<th><font color='Red'>EMP_INS</font></th>

</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['emp_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ms'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ds'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ins'] . '</font></b></td>';



echo "</tr>";

}

echo "</table>";
?>
</body>
</html>

