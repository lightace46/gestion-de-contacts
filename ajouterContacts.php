<?php
include 'bd.php';

$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

$base = connectDB();

$sql = $base->query("INSERT INTO contacts (`nom`,`email`,`telephone`) VALUES ('$nom','$email','$telephone')");

header("Location:index.php");