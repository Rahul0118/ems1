<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM hr WHERE id=$id")
or die(mysql_error());

header("Location: hr1_view.php");
}
else

{
header("Location: hr1_view.php");
}
?>

