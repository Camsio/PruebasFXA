<?php
    include("conexion.php");
    $contra=$_POST['newcontra'];
    $doc=$_POST['doc'];

    $query="UPDATE usuario set Usu_contraseña = '$contra' where Usu_doc_Identidad = '$doc';";
    $link->query($query);

    header("Location:inicio.php?message=success_password")

?>