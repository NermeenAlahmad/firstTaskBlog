<?php
include('connection.php');

$fname     = $_POST['fname'];
$lname     = $_POST['lname'];
$subject     = $_POST['subject'];

$sql      = "INSERT INTO contact(fname,lname,subject) 
             VALUES ('$fname','$lname','$subject')";


if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($connect);