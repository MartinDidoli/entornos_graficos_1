<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_2</title>
</head>
<body>
    <h1>Entrá en contacto con el webmaster</h1>
    <form action="ejercicio2b.php" method="POST">
        <fieldset>
            <p>
                <label>
                    Nombre
                    <input type="text" name="nombre">
                </label>
            </p>
            <p>
                <label>
                    Tu email
                    <input type="email" name="remitente">
                </label>
            </p>
            <p>
                <label>
                    Asunto
                    <input type="text" name="asunto">
                </label>
            </p>
            <p>
                <label>
                    Mensaje
                    <input type="text" name="cuerpo">
                </label>
            </p>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>