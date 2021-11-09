<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de lOGIN </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Formulario de Login de Cliente</h1>
        <div class = "capaform">
            <form class = "form-font" name = "Formlogin"
                  action = "index.php" method = "POST">
                <div class = "form-section">
                    <label for = "nombre">Nombre:</label>
                    <input id = "nombre" type = "text" required = "required" name = "nombre" size = "30" />
                </div>
                <div class = "form-section">
                    <label for = "contrasenia">Contraseña:</label>
                    <input id = "contrasenia" type = "password" required = "required" name = "contrasenia" size = "20"/>
                </div>
                <input class = "submit" type = "submit"
                       value = "Enviar" name = "botonenviologin" />
            </form>
            <?php if (@isset($invalidAccess) && $invalidAccess): ?>
                <h1>Error de Credenciales</h1>
            <?php endif ?> 
        </div>
    </body>
</html>
