
<?php   
    
    include("conexion.php");
    session_start();

    $placa = $_POST['placa'];
    $tarjeta = $_POST['tdp'];
    $tipoCamion = $_POST['tipoCamion'];
    $peso = $_POST['peso'];
    $documento = $_SESSION['documento1'];
    
    


    if($peso <= 3000){
        $query = "INSERT INTO vehiculo (Vehiculo_num_Placa , Vehiculo_tipo_Camion, Vehiculo_tarjeta_Propiedad,Usu_doc_Identidad, Cod_camion_Capacidad) VALUES ('$placa', '$tipoCamion', '$tarjeta','$documento', 1);";
    }elseif($peso > 3000 && $peso <= 6000){
        $query = "INSERT INTO vehiculo (Vehiculo_num_Placa , Vehiculo_tipo_Camion, Vehiculo_tarjeta_Propiedad,Usu_doc_Identidad, Cod_camion_Capacidad) VALUES ('$placa', '$tipoCamion', '$tarjeta','$documento', 2);";
    }elseif($peso > 6000){
        $query = "INSERT INTO vehiculo (Vehiculo_num_Placa , Vehiculo_tipo_Camion, Vehiculo_tarjeta_Propiedad,Usu_doc_Identidad, Cod_camion_Capacidad) VALUES ('$placa', '$tipoCamion', '$tarjeta','$documento', 3);";
    }

    
    $cadena = mysqli_query($link, $query) or die ("Error en el registro");

    echo "<script>
        alert('Vehiculo guardado correctamente');
        location.href='InicioConductor.html';
        </script>
    "

    
?>