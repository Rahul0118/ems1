<html>
<head>
<title>View Records</title>
</head>
<body align="center" bgcolor="pink">
<marquee>EMPLOYEE DETAILS</marquee>
<?php
error_reporting(0);
session_start();
include('config.php');
$id=$_SESSION["eid"];
$result = mysql_query("SELECT * FROM `employee` where id='".$id."'")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<center>
<th><font color='Red'>EMP_Id</font></th>
<th><font color='Red'>EMP_Name</font></th>
<th><font color='Red'>EMP_Address</font></th>
<th><font color='Red'>EMP_City</font></th>
<th><font color='Red'>EMP_Password</font></th>
<th><font color='Red'>EMP_Sal</font></th>
<th><font color='Red'>Total_ML</font></th>
<th><font color='Red'>Total_CL</font></th>
</center>



</tr>";

while($row = mysql_fetch_array( $result ))
{
echo "<tr>";

echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['address'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['city'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['password'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['sal'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ml'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['cl'] . '</font></b></td>';

echo "</tr>";

}

echo "</table>";
?>
<p><a href="emp1_main.php">GO BACK TO EMPLOYEE HOME</a></p>
</body>
</html>

