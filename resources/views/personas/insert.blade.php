<?php

$user = new \App\Persona;

$user->Name = $_POST['Name'];
$user->LastName = $_POST['LastName'];
$user->Address = $_POST['Address'];
$user->email = $_POST['email'];
$user->phoneNumber = $_POST['phoneNumber'];
$user->Type = $_POST['Type'];
$user->save();
header("location:agenda");
exit;
?>