

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
if(isset($_REQUEST['message']))
{
$message=mysqli_real_escape_string($dbCon,$_POST['message']);
	$assign_by=$_POST['assign_by'];
	 $emplist=$_POST['emp'];
	//print_r( $emplist);
	foreach ($emplist as $emp) {
	     $query="INSERT INTO task (t_id,task,user_id,assigned_by) VALUES ('','$message','$emp','$assign_by')";
		 echo $emp;
	}
	if(mysqli_query($dbCon, $query)){
		$_SESSION['success']="Message send successfully!";
		header('Location:task.php');
	}else{
		echo "Data not inserted, please try again!";
	}
}



?>