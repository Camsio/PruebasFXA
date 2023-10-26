<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="../estilos/estilosLoginRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="inc">
        <h1>Recuperar contraseña</h1>
        <form action="recuperar.php"  method="post">
            Email: <br>
            <input type="email" name="correo" placeholder="correo electronico">
            <br><br>
            <button type="submit">Recuperar contraseña</button>
            <br><br>
            <a href="inicio.php">Volver al inicio</a>
        </form>
    </div>
</body>
</html>