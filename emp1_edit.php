 <?php
 error_reporting(0);
function valid($id,$name,$address,$city,$sal,$ml,$cl,$error)
{
?>

<html>
<head>
<title>Edit Records</title>
</head>
<body>
<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
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
<input type="text" name="sal" value="<?php echo $sal; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>ml<em>*</em></font></b></td>
<td><label>
<input type="text" name="ml" value="<?php echo $ml; ?>" />
</label></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>cl<em>*</em></font></b></td>
<td><label>
<input type="text" name="cl" value="<?php echo $cl; ?>" />
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

if (is_numeric($_POST['id']))
{

$id =$_POST['id'];
$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$address = mysql_real_escape_string(htmlspecialchars($_POST['address']));
$city = mysql_real_escape_string(htmlspecialchars($_POST['city']));
$sal = mysql_real_escape_string(htmlspecialchars($_POST['sal']));
$ml = mysql_real_escape_string(htmlspecialchars($_POST['ml']));
$cl = mysql_real_escape_string(htmlspecialchars($_POST['cl']));
if ($name == '' || $address == '' || $city == '' || $sal == ''|| $ml == ''|| $cl == ''  )
{

$error = 'ERROR: Please fill in all required fields!';


valid($id,$name, $address,$city,$sal,$ml,$cl,$error);
}
else
{

$s=mysql_query("UPDATE employee SET name='$name', address='$address' ,city='$city' ,sal='$sal',ml='$ml',cl='$cl' WHERE id='$id'");
echo "Your Data Updated.";
 mysql_query( $s);

header("Location: emp2_view.php");
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysql_query("SELECT * FROM employee WHERE id=$id")
or die(mysql_error());
$row = mysql_fetch_array($result);

if($row)
{

$name = $row['name'];
$address = $row['address'];
$city = $row['city'];
$sal = $row['sal'];
$ml = $row['ml'];
$cl = $row['cl'];
valid($id,$name, $address,$city,$sal,$ml,$cl,'');
}
else
{
echo "No results!";
}
}
else

{
header("Location: emp2_view.php");
}
}
?>



