<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_3</title>
</head>
<body>
    <h1>Recomendá el sitio a un amigo</h1>
    <form action="ejercicio3b.php" method="POST">
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
                    El email de tu amigo
                    <input type="email" name="amigo">
                </label>
            </p>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>