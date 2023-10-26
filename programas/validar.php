<?php
session_start();
if (isset($_POST['usu']) && isset($_POST['contra'])) {
    $usuario = $_POST['usu'];
    $contraseña = $_POST['contra'];

    $conexion = mysqli_connect("localhost", "root", "", "mudanzas");

    // Evita la inyección SQL usando consultas preparadas
    $consulta = "SELECT * FROM Usuario WHERE Usu_nombre_Usuario=? AND Usu_contraseña=?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $filas = mysqli_fetch_array($resultado);
        switch ($filas['Rol_cod']) {
            case 0:
                header("location: InicioAdmin.html");
                break;
            case 1:
                header("location: InicioEmpleado.html");
                break;
            case 2:
                header("location: InicioConductor.html");
                break;
            case 3:
                header("location: InicioCliente.html");
                break;
                case 5:
                    echo "<script>
            alert('No tienes un rol asignado');
            location.href='inicio.php';
            </script>
        " ;  ;
                    break;
            default:
                echo "ERROR de autenticación";
        }
    } else 
        {
            echo "<script>
            alert('No estas registrado ');
            location.href='inicio.php';
            </script>
        " ;   };

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
};
?>
