<?php
session_start();
<?php include "authentication.php";?>
$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = "my_db"; // database name
$dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
  if(!$dbCon){
      die('Could not Connect MySql Server:' .mysql_error());
  }

// insert query for register page
if(isset($_REQUEST['l_from']))
{
$l_from=$_POST['l_from'];
$l_to=$_POST['l_to'];
$eleave=$_POST['eleave'];
$mleave=$_POST['mleave'];
$cleave=$_POST['cleave'];
$apply_by=$_POST['user_id'];
$status="Pending";

	
	
	 $query="INSERT INTO `applied_leave` (`id`,`l_from`,`l_to`,`e_leave`,`m_leave`,`c_leave`,`apply_by`,`status`) VALUES ('','$l_from','$l_to','$eleave','$mleave','$cleave','$apply_by','$status')";
	
	$res=mysqli_query($dbCon,$query);
	if($res){
		$_SESSION['success']="Leave Applied successfully!";
		header('Location:leave.php');
	}else{
		echo "Leave not Applied, please try again!";
	}
	}
	




?>