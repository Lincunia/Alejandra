<?php
session_start();
$link = mysqli_connect(
  'localhost',
  'root',
  '',
  'great_brother'
) or die('Esto no funciona, conoce los detalles de esto: '.mysqli_erro($mysqli));
?>
