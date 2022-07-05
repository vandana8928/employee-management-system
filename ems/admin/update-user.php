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

// insert query for register page
if(isset($_REQUEST['email']))
{
	  $user_id=$_POST['user_id'];
	$name=$_POST['inputName'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$depart=$_POST['depart'];
	$role=$_POST['role'];
	if($_POST['password']==''){
		
	$query="UPDATE `customers` SET `name`='$name',`email`='$email',`department`='$depart',`role`='$role' where `user_id`='$user_id'";	
	}else{
	 $query="UPDATE `customers` SET `name`='$name',`email`='$email',`password`='$pass',`department`='$depart',`role`='$role' where `user_id`='$user_id'";
	}
	
	$res=mysqli_query($dbCon,$query);
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		header('Location:dashboard.php');
	}else{
		echo "Data not Updated, please try again!";
	}
	
}



?>