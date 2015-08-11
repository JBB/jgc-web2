<?php 
$contactname = $_POST['contactname'];
$contactemail = $_POST['contactemail'];
$contactmessage = $_POST['contactmessage'];
$contactorgan = $_POST['contactorgan'];
$contactjob = $_POST['contactjob'];
$contacthello = $_POST['contacthello'];
$formcontent = "Name: $contactname \n Email: $contactemail \n Organization: $contactorgan \n Title: $contactjob \n Grouping: $contacthello \n Message: $contactmessage";
$recipient = "nguyentjeremy@yahoo.com";
$subject = "Wallace Convening";
$mailheader = "From: $contactemail";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
