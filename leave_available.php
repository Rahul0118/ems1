<?php
error_reporting(0);
function valid($emp_id,$cl,$ml,$apply_date,$error)
{
?>

<html>
<head>
<title>Insert Records</title>
</head>
<body>
<P><H1>APPLY FOR LEAVE</H1></P>
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
<td width="179"><b><font color='#663300'>Leave id<em>*</em></font></b></td>
<td><label>
<input type="text" name="leave_id" value="<?php echo $leave_id; ?>" />
</label></td>
</tr>


<tr>
<td width="179"><b><font color='#663300'>cl<em>*</em></font></b></td>
<td><label>
<input type="number" name="cl" value="<?php echo $cl; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>ml<em>*</em></font></b></td>
<td><label>
<input type="number" name="ml" value="<?php echo $ml; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Apply_date<em>*</em></font></b></td>
<td><label>
<input type="date" name="apply_date" value="<?php echo $apply_date; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
</label></td>
</tr>
</table>
</form>
<p><a href="emp1_main.php">GO BACK TO EMPLOYEE HOME</a></p>
</body>
</html>
<?php
}

include('config.php');

if (isset($_POST['submit']))
{
$emp_id = mysql_real_escape_string(htmlspecialchars($_POST['emp_id']));
$leave_id = mysql_real_escape_string(htmlspecialchars($_POST['leave_id']));
//echo $leave_id;exit;
$cl = mysql_real_escape_string(htmlspecialchars($_POST['cl']));
$ml = mysql_real_escape_string(htmlspecialchars($_POST['ml']));
$apply_date = mysql_real_escape_string(htmlspecialchars($_POST['apply_date']));

if ($emp_id == '' ||$leave_id == '' ||$cl == '' || $ml == '' || $apply_date == '' )
{

$error = 'Please enter the details!';

valid($emp_id,$leave_id,$cl, $ml,$apply_date,$error);
}
else
{

mysql_query("insert into tlb_leave(emp_id,leave_id,cl,ml,apply_date)values('$emp_id','$leave_id','$cl','$ml','$apply_date')")
or die(mysql_error());

header("Location: view_leave_HR.php");
header("Location: view_leave_emp.php");
}
}
else
{
valid('','','','','');
}
?>

