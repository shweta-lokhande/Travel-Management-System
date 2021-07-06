<?php


include("function.php");

$name=$_REQUEST['name'];
$city=$_REQUEST['city'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];


// Inserting data into table

$quer = mysqli_query($db_connect, "INSERT INTO contact_db(name,city,email,message) VALUES ('$name','$city','$email','$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);


header("location:contactus.php?note=success");
?>