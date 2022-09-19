<?php
include('../connection.php');

if(isset($_POST['parents_log_in'])){
    $id=$_POST['parents_id'];
    $email=$_POST['parents_email'];
    $pass=$_POST['parents_pass'];
    $result=mysqli_query($link, "SELECT * FROM parents WHERE students_id=$id AND email='$email' AND password='$pass';");
}
if(isset($_POST['students_log_in'])){
    $id=$_POST['students_id'];
    $name=$_POST['students_name'];
    $pass=$_POST['students_pass'];
    $result=mysqli_query($link, "SELECT * FROM students WHERE id=$id AND name='$name' AND password='$pass';");
}
if(!$result){
    die('<br>Consulta no valida: '.$link->error);
}

else{
    $_SESSION['result'] = $result->fetch(PDO::FETCH_ASSOC);
    if(!$_SESSION['result']){
	header('Location: ../../index.php');
    }
    if($_SESSION['result']['name']==$name && $_SESSION['result']['id']==$id && $_SESSION['result']['level']==$fdi) header('Location: ../sub/list.php');
    header('Location: ../../sub/list.php');
}
?>
