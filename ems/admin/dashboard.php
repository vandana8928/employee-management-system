


<?php include "../auth/auth.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" ></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function formvalidation(){
	var email=$('#inputEmail').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	

	if(email=='')
	{
		alert("Please Enter your email");
		return false;
		
	}
	if(password=='')
	{
		alert("Please Enter your password");
		return false;
		
	}
	if(passlength<=4)
	{
		alert("Please Enter minimum 5 digit password");
		return false;
		
	}
}
</script>

</head>
<body>
<?php include "header.php" ?> 

    
   <div class="container">
    <?php
    echo"welcome to admin dashboard";
    ?></div>
  
   

</body>
</html>


