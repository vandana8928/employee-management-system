
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

{  $name=$_POST['inputName'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$depart=$_POST['depart'];
	$role=$_POST['role'];
 
     $query = "INSERT INTO customers (user_id,name,email,password,department,role)
     VALUES ('','$name','$email','$pass','$depart','$role')";
 
     if (mysqli_query($dbCon, $query)) {
       $_SESSION['success']="Data inserted successfully!";
        header('Location:register.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
   
}
?>