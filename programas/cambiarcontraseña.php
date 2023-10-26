<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambiar contraseña</title>
    <link rel="stylesheet" href="../estilos/estilosLoginRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="inc">
        <h1>recupera tu contraseña</h1>
        <form action="cacon.php"  method="post">
            Documento: <br>
            <input type="text" name= "doc" placeholder="documento de identidad">
            <br><br>
            Nueva contraseña: <br>
            <input type="text" name="newcontra" placeholder="nueva contraseña: ">
            <br><br>
            <button type="submit">Recuperar contraseña</button>
            <br><br>
            <a href="inicio.php">Volver al inicio</a>
        </form>
    </div>
</body>
</html>