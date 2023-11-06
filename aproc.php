<?php
session_start();


include 'db.php';


// Delete User
if(isset($_POST['deleteUser'])) {

// sql to delete a record
$sql = "DELETE FROM users WHERE id='{$_POST['userId']}'";
if (mysqli_query($conn, $sql)) {
$_SESSION['message'] = 'userdeleted';
header("Location: admin.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}


// Update User


if(isset($_POST['updateUser'])) {
  $sql = "UPDATE users SET firstname='{$_POST['firstname']}',lastname='{$_POST['lastname']}',email='{$_POST['email']}' WHERE id='{$_POST['userId']}'";
  if (mysqli_query($conn, $sql)) {
  $_SESSION['message'] = 'userupdated';
  header("Location: admin.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  }


mysqli_close($conn);

?>