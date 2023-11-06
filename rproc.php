<?php




$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email = $_POST['email'];
$user = $_POST['user'];

include 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: ". $row["userId"]. " - Name: ". $row["firstname"]. " " .$row["lastname"]. "<br>" ;
  }
} else {
  echo "0 results";
}

// gnereate password/rand number
$pwd = rand();

// encrypt the password/ random
$epwd = md5($pwd);

// insert a record
$sqlI = "INSERT INTO users (firstname, lastname, email, user, epwd)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}', '{$_POST['user']}' ,'{$epwd}')";

if ($conn->query($sqlI) === TRUE) {
  echo "You have been successfully registered!";
} else {
  echo "Error: " . $sqlI . "<br>" . $conn->error;
}
header("Location: login.php");
$conn->close();


// mail the username and password(not decrypted password) to user

$to = $email;
$subject = "You have been registered.";
$txt = "Login information:
  Username = $email
  Password = $pwd";
$headers = "From: webmaster@example.com" . "\r\n" .

mail($to,$subject,$txt,$headers);






?>