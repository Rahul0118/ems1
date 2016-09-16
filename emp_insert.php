<html>
<body>
<?php
error_reporting(0);
function valid($name, $address,$city,$sal,$ml,$cl, $error)
{
?>

<html>
<head>
<title>Insert Records</title>
</head>
<body>
<P><H1> REGISTER NEW EMPLOYEE</H1></P>
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
<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="address" value="<?php echo $address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>City<em>*</em></font></b></td>
<td><label>
<input type="text" name="city" value="<?php echo $city; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>sal<em>*</em></font></b></td>
<td><label>
<input type="number" name="sal" value="<?php echo $sal; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>ml<em>*</em></font></b></td>
<td><label>
<input type="number" name="ml" value="<?php echo $ml; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>cl<em>*</em></font></b></td>
<td><label>
<input type="number" name="cl" value="<?php echo $cl; ?>" />
</label></td>
</tr>
<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
</label></td>
</tr>
</table>
</form>
<p><a href="admin_main.php">GO BACK TO ADMIN HOME</a></p>

</body>
</html>
<?php
}

include('config.php');

if (isset($_POST['submit']))
{

$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$address = mysql_real_escape_string(htmlspecialchars($_POST['address']));
$city = mysql_real_escape_string(htmlspecialchars($_POST['city']));
$sal = mysql_real_escape_string(htmlspecialchars($_POST['sal']));
$ml = mysql_real_escape_string(htmlspecialchars($_POST['ml']));
$cl = mysql_real_escape_string(htmlspecialchars($_POST['cl']));

if ($name == '' || $address == '' || $city == '' || $sal == ''|| $ml == ''|| $cl == '')
{

$error = 'Please enter the details!';

valid($name, $address, $city,$sal,$ml,$cl,$error);
}
else
{

mysql_query("insert into employee(name,address,city,password,sal,ml,cl)values('$name','$address','$city','$password','$sal','$ml','$cl')")
or die(mysql_error());

header("Location: emp_view.php");
}
}
else
{
valid('','','','','','','');
}
?>
