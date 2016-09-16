<html>
<head>
<title>View Records</title>
</head>
<body>
<P><H1>LEAVE REQUEST GRANT</H1></P>
<?php
error_reporting(0);
include('config.php');

$result = mysql_query("SELECT * FROM employee ")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>EMP_Id</font></th>
<th><font color='Red'>EMP_Name</font></th>
<th><font color='Red'>EMP_Address</font></th>
<th><font color='Red'>EMP_City</font></th>
<th><font color='Red'>EMP_Sal</font></th>
<th><font color='Red'>EMP_ML</font></th>
<th><font color='Red'>EMP_CL</font></th>

<th><font color='Red'>Edit</font></th>


</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['address'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['city'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['sal'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ml'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['cl'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="emp1_edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';


echo "</tr>";

}

echo "</table>";
?>
<p><a href="admin_main.php">GO BACK TO ADMIN HOME</a></p>

</body>
</html>

