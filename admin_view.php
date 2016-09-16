
<html>
<head>
<title>View Records</title>
</head>
<body align="center" bgcolor="white">
<marquee>ADMIN DETAILS</marquee>
<?php
error_reporting(0);
include('config.php');

$result = mysql_query("SELECT * FROM admin")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>HR_Id</font></th>
<th><font color='Red'>HR_Name</font></th>
<th><font color='Red'>HR_Address</font></th>
<th><font color='Red'>HR_City</font></th>
<th><font color='Red'>HR_Password</font></th>
<th><font color='Red'>HR_Sal</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>


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
echo '<td><b><font color="#663300"><a href="admin_edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="admin_delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


echo "</tr>";

}

echo "</table>";
?>
<p><a href="admin_insert.php">Insert new record</a></p>
<p><a href="admin_main.php">GO BACK TO ADMIN HOME</a></p>
</body>
</html>

