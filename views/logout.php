<?php 
 
//require_once __DIR__ . '/../templates/header.php';

session_start();
session_destroy();
 
header("Location:/final_project/index.php");
 
?>

<?php

//require_once __DIR__ . '/../templates/footer.php';
?>