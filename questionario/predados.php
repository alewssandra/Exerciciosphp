<?php
session_start();
$_SESSION["nome"] = $_POST["nome"];
$_SESSION["idade"] = $_POST["idade"];
header("Location:dados.php");
?>
