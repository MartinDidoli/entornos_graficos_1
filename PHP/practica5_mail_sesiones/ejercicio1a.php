<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_1</title>
</head>
<body>
    <form action="ejercicio1b.php" method="POST">
        <fieldset>
            <p>
                <label>
                    Destinatario
                    <input type="email" name="destinatario">
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