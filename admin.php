<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>





<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
<div class="col-md-8">

<h1>Admin</h1>

<form action="aproc.php" method="POST">  <!-- Edit Forum -->

  <label for="firstname">FirstName:</label> <input type="text" name="firstname" value="" required><br>
  <label for="lastname">Last Name:</label> <input type="text" name="lastname" value=""  required><br>
  <label for="email">Email:</label> <input type="email" name="email" value=""  required><br>

  <?php
if(isset($_POST['editUser'])) {
echo '<input type="hidden" name="id" value="'.$_POST['id'].'">';
echo '<button type="submit" name="updateUser" class="btn btn-warning">Update User</button>';
} 
?>
<!-- Display Message after Added/Deleted/Updated -->
  <?php
  if(isset($_SESSION['message'])) {
  
  if($_SESSION['message'] == 'userupdated') {

      echo '<div class="alert alert-success">
      <strong>Success!</strong> User Updated.
      </div><br><br>';
      }
      
    
  if($_SESSION['message'] == 'userdeleted') {
    echo '<div class="alert alert-warning">
    <strong>User Deleted!</strong> 
    </div><br><br>';
      
    }

    unset($_SESSION['message']);


}





  ?>
</form>


<!-- Display of Users -->

<br><br>
<table class="table table-hover table-striped">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th></th>
<th></th>
</tr>

<!-- FTP details -->

<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>


<!-- Format for the Table info -->

<tr>
<td><?=$row['userId']?></td>
<td><?=$row['firstname']?></td>
<td><?=$row['lastname']?></td>
<td><?=$row['email']?></td>
<td>



<form action="admin.php" method="POST">
<input type="hidden" name="id" value="<?=$row['userId']?>">
<input type="hidden" name="firstname" value="<?=$row['firstname']?>">
<input type="hidden" name="lastname" value="<?=$row['lastname']?>">
<input type="hidden" name="email" value="<?=$row['email']?>">
<button type="submit" name="editUser" class="btn btn-success btn-xs">Edit</button>
</form>
</td>

<td>
<form action="aproc.php" method="POST">
<input type="hidden" name="id" value="<?=$row['userId']?>">
<button type="submit" name="deleteUser" class="btn btn-danger btn-xs">X</button>
</form>
</td>
</tr>

<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</table>

</div>
<div class="col-md-2"></div>
</div>
</div>


</body>
</html>