<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css"></link>
	<title>Algo - Main</title>
    </head>
    <body style="background-color: #edfafc;">
	<header style="background-color: #ffa6c5;">
<?php
include('./php/connection.php');
?>
	</header>
	<div class="conjunction">
	    <section style="background-color: #93f596;">
		<article style="background-color: #e7f797;">
		</article>
		<article style="background-color: #f7e4a6;">
		</article>
	    </section>
	    <aside style="background-color: #b597f7;">
		<form action="./php/credential/log_in.php" method="POST">
		    <h2>Ingreso de los estudiantes</h2>
		    <input type="number" name="students_id" placeholder="Número de identidad">
		    <input type="text" name="students_name" placeholder="Correo Electrónico">
		    <input type="password" name="students_pass" placeholder="Contraseña">
		    <button type="submit" name="students_log_in">Ingresar</button>
		    <h2>Ingreso de los padres</h2>
		    <input type="number" name="parents_id" placeholder="Número de identidad">
		    <input type="email" name="parents_email" placeholder="Correo Electrónico">
		    <input type="password" name="parents_pass" placeholder="Contraseña">
		    <button type="submit" name="parents_log_in">Ingresar</button>
		</form>
	    </aside>
	</div>
    </body>
</html>
