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
    <br><br><br><br><br><br>
    <div class="container" style="background-color: #dab681; padding: 10px; border-radius: 15px">

        <h1>Cotizacion</h1>
        <?php 

            include("conexion.php");

            $documento = $_POST['docu'];
            $direcOrigen = $_POST['diror'];
            $direcDestino = $_POST['dirdest'];
            $kilometros = $_POST['kilometros'];
            $kilos = $_POST['kilos'];
            $fecha = $_POST['fecha'];
            $costo;
            $tipoCamion; 
            $codCapacidadCamion;
            
            //echo $documento . " ". $direcDestino . " ". $direcOrigen . " ". $kilometros. " ". $kilos;
            
            if($kilos<=3000){
                $tipoCamion = 'Camion liviano';
                $codCapacidadCamion = 1;
                $costo = 20000*$kilometros;
            }elseif($kilos>3000 && $kilos<=6000){
                $tipoCamion = 'Camion carga mediana';
                $codCapacidadCamion = 2;
                $costo = 50000*$kilometros;
            }elseif($kilos>6000){
                $tipoCamion = 'Camion carga pesada';
                $codCapacidadCamion = 3;
                $costo = 85000*$kilometros;
            };

            echo "
            
            
            ";

            $query = "INSERT INTO cotizacion (Coti_direccion_Origen, Coti_direccion_Destino, Coti_precio, Usu_doc_Identidad , Cod_camion_Capacidad, Kilometraje_cod, Coti_fecha) VALUES ('$direcOrigen', '$direcDestino', '$costo', '$documento', '$codCapacidadCamion', '$codCapacidadCamion', '$fecha');";
            $cadena = mysqli_query($link, $query) or die ("Error en el registro");

        ?>

        <table class='table table-striped' style='background-color: #dab681'>
            <tbody>
                <tr>
                    <td style='background-color: #dab681'>Numero de documento</td>
                    <td style='background-color: #dab681'><?php echo $documento;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Direccion Origen</td>                    
                    <td style='background-color: #dab681'><?php echo $direcOrigen;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Direccion Destino</td>
                    <td style='background-color: #dab681'><?php echo $direcDestino;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Kilometros aproximados</td>
                    <td style='background-color: #dab681'><?php echo $kilometros;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Kilos aproximados</td>
                    <td style='background-color: #dab681'><?php echo $kilos;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Tipo de Camion</td>
                    <td style='background-color: #dab681'><?php echo $tipoCamion;?></td>
                </tr>
                <tr>
                    <td style='background-color: #dab681'>Costo</td>
                    <td style='background-color: #dab681'><b><?php echo $costo;?>$</b></td>
                </tr>
            </tbody>
        </table>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>