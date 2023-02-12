<?php
$conn = mysqli_connect("localhost","root","","test-editor" ) or die ("error" . mysqli_error($conn));

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['save'])) {
	$content = $_POST['editor-content'];
	$query = "INSERT INTO posts (content) VALUES (?)";
	$stmt = mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, "s", $content);
	if (mysqli_stmt_execute($stmt)) {
		echo "<script> alert('Content posted successfully');
                window.location.href='index.php';</script>";
	}
	else {
		echo "<script> alert('Error while posting..try again');</script>";
	}
}
