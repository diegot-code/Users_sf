<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <title>Registration</title>
</head>
<body>
    
<?php 

include 'header.php';

?>

<div class="container">
    <h1>Registration</h1>


<form action="rproc.php" method="POST">
    <div class="conatiner">
        <div class="row">
            <div class="col-md-12">

            <div class="form-group">
                <label><strong>First Name</strong><input type="text" name="firstname" class="form-control" required></label>
            </div>
            <div class="form-group">
                <label><strong>Last Name</strong><input type="text" name="lastname" class="form-control" required></label>
            </div>
            <div class="form-group">
                <label><strong>Email</strong><input type="text" name="email" class="form-control" required></label>
            </div>
            <div class="form-group">
                <label><strong>Username</strong><input type="text" name="user" class="form-control" required></label>
            </div>
            


            <button class="sumbit">Register</button>
            </div>
        </div>
    </div>
</form>
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>