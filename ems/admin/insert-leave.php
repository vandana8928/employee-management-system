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
if(isset($_REQUEST['validfrm']))
{
$validfrm=$_POST['validfrm'];
$validto=$_POST['validto'];
$eleave=$_POST['eleave'];
$mleave=$_POST['mleave'];
$cleave=$_POST['cleave'];
$assign_by=$_POST['assign_by'];

	 $emplist=$_POST['emp'];
	//print_r( $emplist);
	foreach($emplist as $emp){
	
	 $query="INSERT INTO `assign_leave` (`id`,`v_from`,`v_to`,`e_leave`,`m_leave`,`c_leave`,`assign_to`,`assign_by`) VALUES ('','$validfrm','$validto','$eleave','$mleave','$cleave','$emp','$assign_by')";
	
	$res=mysqli_query($dbCon,$query);
	
	}
	if($res){
		$_SESSION['success']="Leave Assigned successfully!";
		header('Location:assign-leave.php');
	}else{
		echo "Data not inserted, please try again!";
	}
}



?>