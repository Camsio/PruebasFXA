<?php   
    
    include("conexion.php");

    $documento = $_POST['doc'];
    $fecha = $_POST['fecha'];
    $tipoPQR = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];



    $query = "INSERT INTO pqr (PQR_tipo, PQR_descripcion, PQR_fecha, Usu_doc_Identidad) VALUES ('$tipoPQR', '$descripcion', '$fecha', '$documento');";

    $cadena = mysqli_query($link, $query) or die ("Error en el registro");

    echo "<script>
        alert('Se ha enviado el PQR correctamente');
        location.href='inicio.php';
        </script>
    "
?>