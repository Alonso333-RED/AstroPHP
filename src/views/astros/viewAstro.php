<?php
require_once("./src/config/Config.php");
require_once("./src/classes/Astro.php");
$basePath = './src/public/astro_images/';
$imagePath = $basePath . $astro->image;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars("Viendo: " . $astro->name); ?></title>
    <style>
        body{
            background-color: #000000ff;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1{
            font-size: 50px;
            text-align: center;
            margin-bottom: 30px;
        }

        .general-link {
            color: #ff0000ff;
            text-decoration: none;
            font-weight: bold;
            font-size: 25px;
            margin-right: 100px;
        }

        .general-link:hover {
            text-decoration: underline;
            color: #ffffffff;
        }

        .astro-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: flex-start;
        }

        .astro-image {
                flex: 0 0 725px;
                height: 725px;
                max-width: 100%;
                border-radius: 10px;
                object-fit: cover;
        }

        .astro-info {
            flex: 1;
            font-size: 28px;
            line-height: 1;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    </style>
</head>
<body>

<a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewAllAstros" ?>">Atrás</a>

<h1><?php echo htmlspecialchars($astro->name); ?></h1>

<div class="astro-container">

    <!-- Imagen del astro -->
    <?php if (!empty($astro->image) && file_exists($imagePath)): ?>
        <img src="<?php echo htmlspecialchars($imagePath); ?>" 
             alt="<?php echo htmlspecialchars($astro->name); ?>" 
             class="astro-image">
    <?php else: ?>
        <div class="astro-image" style="background:#444; color:#aaa; display:flex; align-items:center; justify-content:center; height:300px;">
            Sin imagen
        </div>
    <?php endif; ?>

    <!-- Información del astro -->
    <div class="astro-info">
        <p><?php echo htmlspecialchars($astro->description); ?></p>
        <p><?php echo htmlspecialchars("Tipo: " . $astro->type); ?></p>
        <p><?php echo htmlspecialchars("Diámetro: " . $astro->diameter . " km"); ?></p>
        <p><?php echo htmlspecialchars("Masa: " . $astro->mass . " soles"); ?></p>
        <p><?php echo htmlspecialchars("Año de Descubrimiento: " . $astro->discovery_year); ?></p>
        <p><?php echo htmlspecialchars("Descubierto por: " . $astro->discovered_by); ?></p>
        <p><?php echo htmlspecialchars("Temperatura: " . $astro->temperature . " °C"); ?></p>
        <p><?php echo htmlspecialchars("ID en la db: " . $astro->id); ?></p>
    </div>


</div>
<a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewDeletingAstro&id=$astro->id" ?>">Eliminar</a>
<a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewUpdatingAstro&id=$astro->id" ?>">Modificar</a>

</body>
</html>