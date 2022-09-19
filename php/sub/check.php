<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css"></link>
	<link rel="shortcut icon" href="../../css/mamadisimo.ico" type="image/x-icon">
	<title>Food Control - List</title>
    </head>
    <body style="background-color: #edfafc;">
<?php
include('../connection.php');
function is_session_started() {
    if ( php_sapi_name() !== 'cli' ) {
	if ( version_compare(phpversion(), '5.4.0', '>=') ) {
	    return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
	} else {
	    return session_id() === '' ? FALSE : TRUE;
	}
    }
    return FALSE;
}
if ( is_session_started() === FALSE ){
    header('Location: ../index.php');
}
else{ ?>
	<header style="background-color: #ffe880">
	    <h1>Food Control</h1>
	</header>
	<div class="basicCon">
	    <section style="background-color: #80ffc1">
		<table>
		    <tr>
			<th> Producto </th>
			<th> Fecha de compra </th>
		    </tr>
		    <tr>
			<td>
			    Saludable: Si
			</td>
			<td>
			    23/09/2022
			</td>
		    </tr>
		    <tr>
			<td>
			    Saludable: No
			</td>
			<td>
			    04/10/2022
			</td>
		    </tr>
		</table>
	    </section>
	    <aside>
		<article style="background-color: #e1ff80">
		    Correo del acudiente: <?= $_SESSION['result'][0]; ?><br>
		    Identificación del estudiante: <?= $_SESSION['result'][2]; ?><br>
		</article>
		<article style="background-color: #ffdd80">
		    <form method="post">
			<button type="submit" name="log_out">Cerrar sesión</button>
		    </form>
		</div>
		</article>
	    </aside>
	</div>
<?php
if(isset($_POST['log_out'])){
    session_destroy();
    header('Location: ../../index.php');
}
} ?>
    </body>
</html>
