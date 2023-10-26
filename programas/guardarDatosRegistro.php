<?php   
    
    include("conexion.php");

    $documento = $_POST['documen'];
    $nombre = $_POST['nom'];
    $direccion = $_POST['direc'];
    $telefono = $_POST['telf'];
    $email = $_POST['email'];
    $usuario = $_POST['usu'];
    $contraseña = $_POST['contra'];

    $query = "INSERT INTO usuario (Usu_doc_Identidad, Usu_nombre, Usu_direccion, Usu_telefono, Usu_correo, Usu_nombre_Usuario, Usu_contraseña, Rol_cod) VALUES ('$documento', '$nombre', '$direccion', '$telefono', '$email', '$usuario', '$contraseña', 5);";

    $cadena = mysqli_query($link, $query) or die ("Error en el registro");

    echo "<script>
        alert('El registro se realizo correctamente - En un momento sera asignado su ROL');
        location.href='inicio.php';
        </script>
    "
?>