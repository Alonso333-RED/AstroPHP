<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Astro</title>
    <style>
        body{
            background-color: #000000ff;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1{
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #400000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #000;
        }

        .general-link {
            color: #ff0000ff;
            text-decoration: none;
            font-weight: bold;
            font-size: 25px;
        }

        .general-link:hover {
            text-decoration: underline;
            color: #ffffffff;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #ff0000ff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #cc0000ff;
        }
    </style>
</head>
<a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewAllAstros" ?>">Cancelar</a>
<body>
    <h1>Crear Nuevo Astro</h1>
    <form action="<?php echo BASE_URL."?controller=AstroController&action=createAstro" ?>" method="POST" enctype="multipart/form-data">

    <label for="name">Nombre (max 50):</label>
    <input type="text" id="name" name="name" maxlength="50" required>

    <label for="description">Descripción (max 600):</label>
    <input type="text" id="description" name="description" maxlength="600" required>

    <label for="type">Tipo (max 50):</label>
    <input type="text" id="type" name="type" maxlength="50" required>

    <label for="diameter">Diámetro (km):</label>
    <input type="number" id="diameter" name="diameter" step="any" required>

    <label for="mass">Masa (Soles):</label>
    <input type="number" id="mass" name="mass" step="any" required>

    <label for="discovery_year">Año de Descubrimiento:</label>
    <input type="number" id="discovery_year" name="discovery_year" required>

    <label for="discovered_by">Descubierto por (max 100):</label>
    <input type="text" id="discovered_by" name="discovered_by" maxlength="100" required>

    <label for="temperature">Temperatura (Celsius):</label>
    <input type="number" id="temperature" name="temperature" step="any" required>

    <label for="image">Imagen (archivo):</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <input type="submit" value="Crear Astro">
    </form>
</body>
</html>