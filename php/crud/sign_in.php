<link rel="stylesheet" href="../../css/style.css"></link>
<?php
include('../connection.php');
if(isset($_POST['btn_acc_modl'])){
    if(empty($_POST['id']) ||
	empty($_POST['name']) ||
	empty($_POST['email']) ||
	empty($_POST['pass_s']) ||
	empty($_POST['pass_p'])) {
	$_SESSION['message']='Inserta datos de forma completa';
	header('Location: ../../index.php');
    }
    else{
	$result=mysqli_query($link, "INSERT INTO students(id, name, password) VALUES (
    {$_POST['id']},
    '{$_POST['name']}',
    '{$_POST['pass_s']}');");
	$result=mysqli_query($link, "INSERT INTO parents(email, password, students_id) VALUES ('
    {$_POST['email']}',
    '{$_POST['pass_p']}',
    {$_POST['id']})");
    }
    if(!$result){
	die("Petición fallida, posibles motivos:
	    <ol>
		<li> El usuario ya existe </li>
		<li> Error en el codigo interno</li>
	    </ol>
	    ");
    }
    $_SESSION['message']='Datos insertados de forma correcta';
}
if(isset($_POST['btn_can_modl'])){
    $_SESSION['property']='display: none';
}
header('Location: ../../index.php');
?>
