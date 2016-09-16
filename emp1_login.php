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
<body align="center" bgcolor="pink">
<center>
	<img src="login.jpg" width=40% height=50% border="2"><br>
</center>
<h1>EMPLOYEE LOGIN<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('ems1') or die(mysql_error());
 $name=$_POST['name'];
 $password=$_POST['password'];
 if($name!=''&&$password!='')
 {
   $query=mysql_query("select * from employee where name='".$name."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['eid']=$res[0];
    header('location:emp1_main.php');
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
</body>
</html>

