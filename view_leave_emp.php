
<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
error_reporting(0);
include('config.php');

$result = mysql_query("SELECT * FROM tlb_leave")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>EMP_ID</font></th>
<th><font color='Red'>LEAVE_ID</font></th>
<th><font color='Red'>LEAVE_CL</font></th>
<th><font color='Red'>LEAVE_ML</font></th>
<th><font color='Red'>APPLY DATE</font></th>

</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['emp_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['leave_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['cl'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['ml'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['apply_date'] . '</font></b></td>';


echo "</tr>";

}

echo "</table>";
?>
<p><a href="emp1_main.php">GO BACK TO EMPLOYEE HOME</a></p>
