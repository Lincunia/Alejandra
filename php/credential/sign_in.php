<link rel="stylesheet" href="../../css/style.css"></link>
<?php
include('../connection.php');
if(isset($_POST['btn_acc_modl'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass_s=$_POST['pass_s'];
    $pass_p=$_POST['pass_p'];

    if($id==="" || $name==="" || $pass_s==="" || $pass_p==="" || $email===""){
	$_SESSION['message']='Inserta datos de forma completa';
	header('Location: ../../index.php');
    }

    $result=mysqli_query($link, "INSERT INTO students(id, name, password) VALUES ($id, '$name','$pass_s');");
    $result=mysqli_query($link, "INSERT INTO parents(email, password, students_id) VALUES ('$email', '$pass_p', $id)");
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
