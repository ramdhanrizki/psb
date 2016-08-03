<?php 
session_start();
if(!isset($_SESSION['psb_id']))
{
header("location:login.php");
exit();
}

?>