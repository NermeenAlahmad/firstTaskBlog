<?php
include('connection.php');


$fname     = $_POST['fname'];
$lname     = $_POST['lname'];
$phone     = $_POST['phone'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql      = "INSERT INTO users( fname,lname,phone, email, password) 
             VALUES ('$fname','$lname','$phone','$email','$password')";

if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($connect);


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