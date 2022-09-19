<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css"></link>
	<title>Food Control - Main</title>
    </head>
    <body style="background-color: #edfafc;">
<?php
include('./php/connection.php');
$_SESSION['property']='display: flex';
?>
	<header style="background-color: #ffa6c5;">
	    <h1>Food Control</h1>
	</header>
	<!--=============================
	CAJITA
	==============================-->
	<?php if(isset($_POST['sign_up_s'])){ ?>
	<div class="modal-container" style="<?= $_SESSION['property'] ?>">
	    <div class="modal" style="background-color: #fcff9e;">
		<form action="./php/credential/sign_in.php" method="POST">
		    <h1>Registro para los estudiantes</h1>
		    <input type="number" name="id" placeholder="Número de identidad">
		    <input type="text" name="name" placeholder="Nombre de estudiante">
		    <input type="password" name="pass" placeholder="Contraseña">

		    <button type="submit" name="btn_acc_modl_a">Insertar</button>
		    <button type="submit" name="btn_can_modl_a">Cancelar</button>
		</form>
	    </div>
	</div>
<?php } if(isset($_POST['sign_up_p'])){ ?>
	<div class="modal-container" style="<?= $_SESSION['property'] ?>">
	    <div class="modal" style="background-color: #fcff9e;">
		<form action="./php/credential/sign_in.php" method="POST">
		    <h1>Registro para los padres</h1>
		    <input type="number" name="id" placeholder="Número de identidad">
		    <input type="email" name="email" placeholder="Correo Electrónico">
		    <input type="password" name="pass" placeholder="Contraseña">

		    <button type="submit" name="btn_acc_modl_b">Insertar</button>
		    <button type="submit" name="btn_can_modl_b">Cancelar</button>
		</form>
	    </div>
	</div>
<?php } ?>
	<!--=============================
	CUERPESITO
	==============================-->
	<div class="conjunction">
	    <section style="background-color: #93f596;">
		<article style="background-color: #e7f797;">
<?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    session_unset();
}?>
		</article>
		<article style="background-color: #f7e4a6;">
		    <img src="./css/loguito.png" style="width: 100%">
Si a tus hijos quieres cuidar, un buen control debes aplicar. Con esta app podrás conocer el consumo diario de tus escuincles y saber qué medidas tomar. Porque como bien lo sabes, hay que tener un control en todo lo que se haga… todo es bueno, pero en cierta medida
<h1>¡POR LOS ENANOIDES!</h1>
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
		<form method="POST">
		    <button type="submit" name="sign_up_s">Registrar estudiantes</button>
		    <button type="submit" name="sign_up_p">Registrar padres</button>
		</form>
	    </aside>
	</div>
    </body>
</html>
