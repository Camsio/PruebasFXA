<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro camion</title>
    <link rel="stylesheet" href="../estilos\estilosLoginRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-image: url(../img/mudan.png); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

<nav class="navbar navbar-dark fixed-top" style="background-color: #000000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="InicioAdmin.html">Mudanzas - Conductor</a> <!--  Vinculo a pagina de inicio  -->
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
              <a class="nav-link active" aria-current="page" href="InicioConductor.html">Inicio</a>  <!--  Vinculo a pagina de inicio  -->
            </li>
          </ul>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="registroCamion.php">Registro de camion</a>  <!--  Vinculo a pagina de inicio  -->
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
 
    <div class="container">
        <form action="guardarCamion.php" class="row g-3" method="post" id="formularioo" style="background-color: #dab681 ; padding: 20px; border-radius: 10px;">
            <h1>Registro Camion</h1>
            <div class="col-md-6">
                <label for="inputText" class="form-label">Placa</label>
                <input type="text" class="form-control" id="inputText" name="placa" required placeholder="XYZ-000">
            </div>
            <div class="col-md-6">
                <label for="inputText" class="form-label">Licencia de tránsito</label>
                <input type="text" class="form-control" id="inputText" name="tdp" required placeholder="123456789">
            </div>
            <div class="col-6">
                <label for="tipoCamion" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="inputText" name="tipoCamion" required placeholder="123456789">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Kilos exactos de capacidad</label>
                <input type="text" class="form-control" id="inputCity" name="peso">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Siguiente</button>
            </div>
        </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>