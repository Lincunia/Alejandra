<link rel="stylesheet" href="../../css/style.css"></link>
<?php
include('../connection.php');
if(isset($_POST['btn_acc_modl_a'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    if($id==="" || $name==="" || $pass===""){
	$_SESSION['message']='Inserta datos de forma completa';
	header('Location: ../../index.php');
    }

    $result=mysqli_query($link, "INSERT INTO students(id, name, password) VALUES ($id, '$name','$pass');");
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
if(isset($_POST['btn_can_modl_a']) || isset($_POST['btn_can_modl_b'])){
    $_SESSION['property']='display: none';
}
header('Location: ../../index.php');
?>
