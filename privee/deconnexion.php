<?php
session_start();

require('co_bdd.php');


unset($_SESSION['admin']);
header('Location: ../index.php');

?>

