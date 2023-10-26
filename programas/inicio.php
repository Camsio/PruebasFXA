<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="../estilos/estilosLoginRegistro.css">
    <link rel="stylesheet" href="../estilos/proyecto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
        @-webkit-keyframes logo {
            from{
                left: 30px;
            }
            to{
                left: 100%;
            }
        }
        @-webkit-keyframes ini {
            from{
                color:#94b0f0;
            }
            to{
                color: white;
            }
        }
    </style>
</head>
<body style="background-image: url(../img/mudan.png);">
    <div id="cuadro"><img class="logo" id="logo" src="../img/logos.png">
        <div id="header" class="header">
		<ul class="nav">
			<li><a href="../Inicio.html">Inicio</a>
			<li><a href="">Opciones</a>
				<ul>
					<li><a href="inicio.php">Inicia Sesion</a></li>	
					<li><a href="registro.php">Registrate</a></li>
					</li>
				</ul>
			</li>
				
			<li><a href="">Acerca de</a>
					<ul>
							<li><a href="Nosotros.html">Nosotros</a></li>
					</ul>
			</li>
			<li><a href="PQR.html">PQR</a></li>							
    </div>
</div>
    <div class="log" style="padding: 20px; background-color: black;">
        <h2 style="color: white;">Inicio o registro de sesion </h2>
        <img src="../img/logoBlanco.gif"  width="280px">
    </div>
    <div class="inc" style="background-color: #dab681;">
        
        <form action="validar.php" method="POST" style="padding: 20px;">
            <h2>Inicio de sesion</h2>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="usu" name="usu" >
            </div>
            <div class="col-md-12" style="margin-top: 10px;">
                <label for="fecha">Contraseña:</label>
                <input type="password" class="form-control" id="contra" name="contra">
            </div>
                <a href="recuperarContraseña.html">Olvide mi contraseña</a>
            <br>
            <div class="col-12" style="margin-top: 1px;" >
                <button type="submit" class="btn btn-primary">Iniciar</button>
            </div>

            <br>
            <p>Si no estas registrador has clik en <a href="registro.php">registrar</a></p>
            
            <?php 
                if(isset($_GET['message'])){
                    switch ($_GET['message']) {
                    case 'ok':
                        echo 'Por favor, revisa tu correo';
                        break;
                    case 'success_password':
                        echo 'Inicia sesión con tu nueva contraseña';
                        break;
                    case 'datosactualizados':
                        echo "<script>
                        alert('datos actualizados correctamente porfavor inicia sesion nuevamente');
                        </script>";
                        break;
                    default:
                        echo "<script>
                        alert('algo salio mal');
                        </script>";
                        break;
                    }
                }
            ?>
        </form>
    </div>
        
</body>
</html>