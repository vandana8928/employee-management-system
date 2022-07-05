


<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css" ></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>
<body>
<?php include "header.php" ?> 

    
   <div class="container">
    <?php
    echo"Welcome To Admin Dashboard";
    ?>

<h1>User Records</h1>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Department</th>
	  <th>Role</th>
	   <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from customers";
	$res=mysqli_query($dbCon, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['department'];?></td>
	    <td><?php echo $row['role'];?></td>
	  <td><a href="edit-user.php?id=<?php echo $row['user_id'];?>">Edit</a> | <a href="delete-user.php?id=<?php echo $row['user_id'];?>">Delete</a></td>
    </tr>
	<?php $i++;
    }
    }else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
  </tbody>
</table> 
</div>
</body>
</html>


