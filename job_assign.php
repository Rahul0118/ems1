<?php
error_reporting(0);
function valid($emp_id,$des, $dur,$start_date,$end_date,$status, $error)
{
?>

<html>
<head>
<title>Insert Records</title>
</head>
<body>
<P><H1>ASSIGN JOB FOR EMPLOYEE</H1></P>
<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="post">
<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Insert Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>Employee id<em>*</em></font></b></td>
<td><label>
<input type="text" name="emp_id" value="<?php echo $emp_id; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>des<em>*</em></font></b></td>
<td><label>
<input type="text" name="des" value="<?php echo $des; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>dur<em>*</em></font></b></td>
<td><label>
<input type="number" name="dur" value="<?php echo $dur; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>start_date<em>*</em></font></b></td>
<td><label>
<input type="date" name="start_date" value="<?php echo $start_date; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>end_date<em>*</em></font></b></td>
<td><label>
<input type="date" name="end_date" value="<?php echo $end_date; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>status<em>*</em></font></b></td>
<td><label>
<input type="text" name="status" value="<?php echo $status; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
</label></td>
</tr>
</table>
</form>
<BR><a href="hr_main.php">GO BACK TO HR HOME</a><BR>

</body>
</html>
<?php
}

include('config.php');
$jsql="select * from job";
$jrec=mysql_query($jsql);
$jres=mysql_fetch_assoc($jrec);
$id=$jres['id'];

if (isset($_POST['submit']))
{
$emp_id = mysql_real_escape_string(htmlspecialchars($_POST['emp_id']));
$des = mysql_real_escape_string(htmlspecialchars($_POST['des']));
$dur = mysql_real_escape_string(htmlspecialchars($_POST['dur']));
$start_date = mysql_real_escape_string(htmlspecialchars($_POST['start_date']));
$end_date = mysql_real_escape_string(htmlspecialchars($_POST['end_date']));
$status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
if ($emp_id == '' ||$des == '' || $dur == '' || $start_date == ''|| $end_date == ''|| $status == '')
{

$error = 'Please enter the details!';

valid($emp_id,$des, $dur, $start_date, $end_date,$status,$error);
}
else
{
$sql="insert into job(emp_id,des,dur,start_date,end_date,job_status)values('$emp_id','$des','$dur','$start_date','$end_date','$status')";
//echo $sql;exit;
$rec=mysql_query($sql);

header("Location: job_view1.php");
}
}
else
{
valid('','','','','','','');
}
?>

