<?php

include 'dbconnect.php';

$name=$_POST['fullname'];
$email=$_POST['emailaddress'];
$locate=$_POST['location'];
$feed=$_POST['feedback'];

$sql="INSERT INTO customer (name,email,location,feedback) VALUES ('$name','$email,'$locate','$feed')";
$result=mysqli_query($conn,$sql);

header("Location:contact.php");
?>
