<?php
include "connection/config.php";
error_reporting(0);
session_start();   


$sql = "DELETE FROM job_hosting WHERE id='".$_GET['cat_del']."'";
mysqli_query($con, $sql);
header("location:job_hosting.php"); 

?>