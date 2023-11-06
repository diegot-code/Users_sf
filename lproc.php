<?php
// Start a session
session_start();

// Check if the user has submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the user's input
	$user = $_POST["user"];
	$pwd = $_POST["pwd"];

	include 'db.php';

	// Check if the user is in the database
	$sql = "SELECT userId FROM users WHERE user='$user' AND pwd='$pwd'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// The user is in the database, set a session variable to remember them
		$_SESSION["user"] = $user;

		// Redirect the user to the admin page
		header("Location: admin.php");
		exit;
	} else {
		// The user is not in the database, show an error message
		echo "Invalid username or password.";
	}

	mysqli_close($conn);
}
?>




