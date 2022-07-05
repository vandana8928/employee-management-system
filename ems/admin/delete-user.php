<?php
session_start();
include "authentication.php";
$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = "my_db"; // database name
$dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
  
  if(!$dbCon){
      die('Could not Connect MySql Server:' .mysql_error());
  }

$user_id=$_GET['id'];
	
	$query="delete from `customers` where `user_id`='$user_id'";
	
	$res=mysqli_query($dbCon,$query);
	if($res){
		$_SESSION['success']="Delete Successfully successfully!";
		header('Location:dashboard.php');
	}else{
		echo "Not Deleted , please try again!";
	}


?>