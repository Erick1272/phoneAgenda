<?php


$user = \App\Persona::find($_GET['id']);

$user->delete();
header("location:agenda");
exit;
?>