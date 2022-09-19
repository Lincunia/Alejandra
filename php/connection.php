<?php
session_start();
$link = mysqli_connect(
  'localhost',
  'root',
  '',
  'great_brother'
) or die(mysqli_erro($mysqli));
echo '<h1>Algo</h1>';
?>
