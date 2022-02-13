<?php
include_once "./funct.php";
DeleteUser($_GET['id']);

header("location: ./");
?>