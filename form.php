<?php
$name = $_GET["name"];
$subject =$_GET["sub"];
$email = $_GET["email"];
$message =$_GET["message"];

// the message
$msg = "Name : ".$name."\n Subject : ".$subject."\n email:".$email."\n Message: ".$message;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: HideYourShit Contact Request <hyscontact@hideyourshitapp.com>";


// send email
mail("ryantrattner@gmail.com","HideYourShit Contact Request",$msg, $headers);
header("Location: http://hideyourshitapp.com")
?>