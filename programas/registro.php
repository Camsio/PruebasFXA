<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="../estilos/estilosLoginRegistro.css">
    <link rel="stylesheet" href="../estilos/proyecto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

    <div class="container">
        
        <form action="guardarDatosRegistro.php" class="row g-3" method="post" id="formularioo" style="background-color: #dab681; padding: 30px; border: 2px; border-radius: 20px;">
            <h1>Registrar Datos</h1>
            <div class="col-md-6">
                <label for="documen" class="form-label">Numero de documento:</label>
                <input type="number" class="form-control" id="documen" name="documen">
            </div>
            <div class="col-md-6">
                <label for="nom" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="col-6">
                <label for="direc" class="form-label">Direccion:</label>
                <input type="text" class="form-control" id="direc" name="direc">
            </div>
            
            <div class="col-6">
                <label for="telf" class="form-label">Telefono:</label>
                <input type="number" class="form-control" id="telf" name="telf">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="usu" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="usu" name="usu">
            </div>
            <div class="col-md-6">
                <label for="contra" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contra" name="contra">
            </div>
            
    
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="button" class="btn btn-danger" onclick="goBack()">volver</button>
            </div>
        </form>
    </div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
