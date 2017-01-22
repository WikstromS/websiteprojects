<?php

$sender = $_POST['sender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sender = strip_tags($sender);
$email = strip_tags($email);
$phone = strip_tags($phone);
$message = strip_tags($message);

$esubject = "Yhteydenotto sivulta!";

$emsg = "nimi: " .$sender . "\n";
$emsg .= "sähköpostiosoite : " .$email . "\n";
$emsg .= "puhelin : " .$phone . "\n";
$emsg .= "\n";
$emsg .= "viesti : \n \n";
$emsg .= $message; 

$emailto = "santeri.wikstrom@edu.turkuamk.fi";
