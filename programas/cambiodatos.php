<?php
include("conexion.php");
$doc=$_POST['docu'];
$tel=$_POST['tel'];
$direc=$_POST['direc'];
$cor=$_POST['correo'];
$usu=$_POST['usu'];
$contra=$_POST['contra'];

$query="UPDATE usuario set 	Usu_telefono ='$tel', Usu_direccion = '$direc', Usu_correo = '$cor', Usu_nombre_Usuario = '$usu', Usu_contraseña = '$contra' where Usu_doc_Identidad = '$doc' ;";
$link->query($query);

header("location:inicio.php?message=datosactualizados")

?>