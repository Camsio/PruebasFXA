<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roles</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/estilosCambioRoles.css">
</head>
<body>

<?php
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $link = mysqli_connect($host,$user,$password) or die ("Error al conectarse al servidor");
    $dbname="mudanzas";
    mysqli_select_db($link,$dbname) or die ("Error al conectarse a la Bd");

    $licencia = $_POST['licenciaConduccion'];
    $antecedentes = $_POST['antecedentes'];
    $documento = $_SESSION['documento1'];

    $query = "DELETE FROM conductor WHERE Usu_doc_Identidad = '$documento';";
    $query = "INSERT INTO conductor  (Usu_doc_Identidad , Conductor_licencia_Conduccion, Conductor_antecedentes) VALUES ('$documento', '$licencia', '$antecedentes');";
    $cadena = mysqli_query($link, $query) or die ("Error en el registro");
    echo "<script>
    alert('Se han guardado los datos del conductor correctamente');
    location.href='InicioAdmin.html';
    </script>
    ";
   
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>