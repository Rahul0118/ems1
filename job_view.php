
<html>
<head>
<title>View Records</title>
</head>
<body align="center" bgcolor="pink">
<marquee>JOB DETAILS</marquee>
<?php
error_reporting(0);
session_start();
include('config.php');
$id=$_SESSION["eid"];
$result = mysql_query("SELECT * FROM `job` where emp_id='".$id."'")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>JOB_Id</font></th>
<th><font color='Red'>JOB_Des</font></th>
<th><font color='Red'>JOB_Dur</font></th>
<th><font color='Red'>START_DATE</font></th>
<th><font color='Red'>END_DATE</font></th>
<th><font color='Red'>STATUS</font></th>


</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['job_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['des'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['dur'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['start_date'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['end_date'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['job_status'] . '</font></b></td>';

echo "</tr>";

}

echo "</table>";
?>
<p><a href="emp1_main.php">GO BACK TO EMPLOYEE HOME</a></p>
</body>
</html>

