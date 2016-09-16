<?php
function valid($emp_id, $ms,$ds,$is, $error)
{
?>

<html>
<head>
<title>Insert Records</title>
</head>
<body>
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
<td width="179"><b><font color='#663300'>Emp_id<em>*</em></font></b></td>
<td><label>
<input type="text" name="emp_id" value="<?php echo $emp_id; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Monthly Salary<em>*</em></font></b></td>
<td><label>
<input type="text" name="ms" value="<?php echo $ms; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Deduction Salary<em>*</em></font></b></td>
<td><label>
<input type="text" name="ds" value="<?php echo $ds; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Insurance<em>*</em></font></b></td>
<td><label>
<input type="text" name="ins" value="<?php echo $ins; ?>" />
</label></td>
</tr>
<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
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

$emp_id= mysql_real_escape_string(htmlspecialchars($_POST['emp_id']));
$ms = mysql_real_escape_string(htmlspecialchars($_POST['ms']));
$ds = mysql_real_escape_string(htmlspecialchars($_POST['ds']));
$is = mysql_real_escape_string(htmlspecialchars($_POST['is']));

if ($emp_id == '' || $ms == '' || $ds == '' || $is == '')
{

$error = 'Please enter the details!';

valid($emp_id, $ms, $ds,$is,$error);
}
else
{

mysql_query("INSERT `sal` SET emp_id=$emp_id, ms=$ms, ds=$ds, is=$is")
or die(mysql_error());

header("Location: sal_view.php");
}
}
else
{
valid('','','','','','');
}
?>

