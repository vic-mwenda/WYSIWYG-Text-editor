<?php
$conn = mysqli_connect("localhost","root","","test-editor" ) or die ("error" . mysqli_error($conn));

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['editor-content'])){
$content = $_GET['editor-content'];
$editor_content = mysqli_escape_string($content);
$query = "INSERT INTO posts (content) VALUES ('$editor_content') ";
$result = mysqli_query($conn , $query) or die(mysqli_error($conn));
if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('Content posted successfully');
                window.location.href='index.php';</script>";
}
else {
    "<script> alert('Error while posting..try again');</script>";
}
}
