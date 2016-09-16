
<html>
<head>
<title>View Records</title>
</head>
<body>
<P><H1>STATUS OF JOB</H1></P>
<?php
error_reporting(0);
include('config.php');

$result = mysql_query("SELECT * FROM job ")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>JOB Id</font></th>
<th><font color='Red'>Employee ID</font></th>
<th><font color='Red'>JOB Description</font></th>
<th><font color='Red'>JOB Duration</font></th>
<th><font color='Red'>START DATE</font></th>
<th><font color='Red'>END_DATE</font></th>
<th><font color='Red'>STATUS</font></th>
<th><font color='Red'>STATUS UPDATE</font></th>

</tr>";

while($row = mysql_fetch_assoc( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['job_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['emp_id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['des'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['dur'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['start_date'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['end_date'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['job_status'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="status_update.php?id=' . $row['emp_id'] .  '&jobid=' . $row['job_id'] . '">STATUS UPDATE</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="admin_main.php">GO BACK TO ADMIN HOME</a></p>
</body>
</html>

