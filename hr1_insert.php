<?php
function valid($name, $address,$city,$sal, $error)
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

$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$address = mysql_real_escape_string(htmlspecialchars($_POST['address']));
$city = mysql_real_escape_string(htmlspecialchars($_POST['city']));

$sal = mysql_real_escape_string(htmlspecialchars($_POST['sal']));

if ($name == '' || $address == '' || $city == '' || $sal == '')
{

$error = 'Please enter the details!';

valid($name, $address, $city,$sal,$error);
}
else
{

mysql_query("INSERT hr SET name='$name', address='$address', city='$city', sal='$sal'")
or die(mysql_error());

header("Location: hr1_view.php");
}
}
else
{
valid('','','','','');
}
?>

