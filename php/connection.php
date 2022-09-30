<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$link = mysqli_connect(
  'localhost',
  'root',
  '',
  'great_brother'
) or die('Esto no funciona, conoce los detalles de esto: '.mysqli_erro($mysqli));
?>
