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

<body style="background-image: url(../img/mudan.png); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

<nav class="navbar navbar-dark fixed-top" style="background-color: #000000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="InicioAdmin.html">Mudanzas - Administrador</a> <!--  Vinculo a pagina de inicio  -->
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
              <a class="nav-link active" aria-current="page" href="InicioAdmin.html">Inicio</a>  <!--  Vinculo a pagina de inicio  -->
            </li>
          </ul>
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Inicio.html">Cerrar sesion</a>  <!--  Vinculo a pagina de inicio  -->
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>

<?php 

    $host="localhost";
    $user="root";
    $password="";
    $link = mysqli_connect($host,$user,$password) or die ("Error al conectarse al servidor");
    $dbname="mudanzas";
    mysqli_select_db($link,$dbname) or die ("Error al conectarse a la Bd");

    
    

    $rol = $_POST['selecRol'];
    $documento = $_POST['selecDocumen'];
    session_start();
    $_SESSION['documento1'] = $documento;

    $query = "UPDATE usuario SET Rol_cod = '$rol' WHERE Usu_doc_Identidad = '$documento';";
    $cadena = mysqli_query($link, $query) or die ("Error en el registro");

    if($rol != 2){
        echo "<script>
        alert('La asignacion de rol se realizo correctamente');
        location.href='cambioRoles.html';
        </script>
        ";
    }else{
        
    };
    

?>

        <div class='container' style='margin-top: 80px; height: 400px;'>
            <div class='row justify-content-center'>
            
            <form action='guardarConductor.php' method='post'>
                <div class='row justify-content-center' style='margin-top: 80px;'>
                    <div class='col-6' style="background-color: #dab681; padding: 30px; border: 2px; border-radius: 20px;">
                        <div class='mb-3'>
                        <label for='licenciaConduccion' class='form-label'>Licencia de conduccion</label>
                        <input type='text' class='form-control' id='licenciaConduccion' aria-describedby='emailHelp' style='border-color: black;' name='licenciaConduccion' required>
                        </div>
                        <div class='mb-3'>
                        <label for='antecedentes' class='form-label'>Antecedentes</label>
                        <textarea class='form-control' rows='5' id='antecedentes' name='antecedentes' style='border-color: black;'></textarea>
                        </div>
                        <button type='submit' class='btn btn-primary'>Aceptar</button>
                        <button type='button' class='btn btn-danger'>Cancelar</button>
                    </div>
                </div>
            </form>

            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>