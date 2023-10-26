<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
    <link rel="stylesheet" href="../estilos/estilosCotizacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-image: url(../img/mudan.png); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

    <nav class="navbar navbar-dark fixed-top" style="background-color: #000000;">
        <div class="container-fluid">
        <a class="navbar-brand" href="InicioCliente.html">Mudanzas - Cliente</a> <!--  Vinculo a pagina de inicio  -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="background-color: #000000;">
            <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color: white;" >Menu</h4>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="InicioCliente.html">Inicio</a>  <!--  Vinculo a pagina de inicio  -->
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cotizacion.php">Cotización</a>  <!--  Vinculo a pagina de inicio  -->
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cambiarDatos.html">Modificar datos</a>  <!--  Vinculo a pagina de inicio (cerrar sesion)  -->
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../Inicio.html">Cerrar sesion</a>  <!--  Vinculo a pagina de inicio  -->
                </li>
            </ul>
            
            </div>
        </div>
        </div>
    </nav>


    <div class="container" >

    <form action="mostrarCotizacion.php" class="row g-3" method="post" id="formularioo" style="background-color: #dab681da; padding: 20px; margin-top: 150px; border-radius: 15px;"   >
        <h1>Cotizacion</h1>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Numero de documento</label>
            <input type="text" class="form-control" id="inputEmail4" name="docu" required>
        </div>
        <div class="col-md-6">
            <label for="fecha">Selecciona una fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Direccion Origen</label>
            <input type="text" class="form-control" id="inputAddress" name="diror" required>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Direccion Destino</label>
            <input type="text" class="form-control" id="inputAddress2" name="dirdest" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Kilometros aproximados</label>
            <input type="text" class="form-control" id="inputCity" name="kilometros" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Kilos aproximados</label>
            <input type="text" class="form-control" id="inputCity" name="kilos" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Siguiente</button>
        </div>
    </form>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>