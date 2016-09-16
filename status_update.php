

<html>
<head>
<title>Edit Records</title>
</head>
<body>
<?php
error_reporting(0);
if(isset ($_GET['id']) && isset ($_GET['jobid']) )
{
$id=$_GET['id'];
$job_id=$_GET['jobid'];
?>
<form action="" method="post">
<input type="hidden" name="job_id" value="<?php echo $job_id; ?>"/>
<input type="hidden" name="emp_id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>



<tr>
<td width="179"><b><font color='#663300'>Status<em>*</em></font></b></td>
<td><label>
<input type="text" name="status" value="<?php echo $status; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

include('config.php');

if (isset($_POST['submit']))
{


$id=$_POST['emp_id'];
$job_id=$_POST['job_id'];

$status=$_POST['status'];
$s=mysql_query("UPDATE job SET job_status='$status' WHERE emp_id='$id' and job_id='$job_id'");
echo $s;
echo "Your Data Updated.";
 mysql_query( $s);

header("Location: job_view1.php");
}

?>



