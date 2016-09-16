<?php
error_reporting(0);
session_start();
mysql_connect("localhost","root","");
 mysql_select_db("ems1");
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $password=$_POST['password'];
 if($name!=''&&$password!='')
 {
   $query=mysql_query("select * from admin where name='".$name."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:admin_main.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body align="center"bgcolor="pink">

	<center>
	<img src="login.jpg" width=40% height=50% border="2" align="middle"><br>
	</center>
<h1>ADMIN LOGIN<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>

</body>
</html>

