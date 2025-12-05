<?php
require_once("./src/config/Config.php");
require_once("./src/classes/Astro.php");

$basePath = './src/public/astro_images/';
$imagePath = $basePath . $astro->image;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars("Editar: " . $astro->name); ?></title>
  <style>
    body { background-color: #000; color: #fff; font-family: Arial, sans-serif; margin: 20px; }
    label { display: block; margin-top: 10px; font-size: 18px; }
    input[type=text], textarea { width: 100%; padding: 8px; font-size: 16px; margin-top: 5px; border-radius: 5px; border: none; color: #fff; background-color: #222; }
    input[type=file] {
      margin-top: 10px;
      color: #fff;
    }
    button { margin-top: 20px; padding: 10px 20px; font-size: 16px; }
    .general-link {
      color: #f00;
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
    }
    .general-link:hover {
      text-decoration: underline;
      color: #fff;
    }
    img.current-image {
      max-width: 300px;
      border-radius: 8px;
      object-fit: cover;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewAstro&id=".$astro->id; ?>">Cancelar modificación</a>
  <h1 style="text-align: center;"><?php echo htmlspecialchars("Editar: " . $astro->name); ?></h1>
  <h2 style="text-align: center;"><?php echo htmlspecialchars("ID: " . $astro->id); ?></h2>

  <form action="<?php echo BASE_URL."?controller=AstroController&action=updateAstro" ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($astro->id); ?>">

    <label>Nombre:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($astro->name); ?>" required>

    <label>Descripción:</label>
    <textarea name="description" rows="4"><?php echo htmlspecialchars($astro->description); ?></textarea>

    <label>Tipo:</label>
    <input type="text" name="type" value="<?php echo htmlspecialchars($astro-> type); ?>" required>

    <label>Diámetro:</label>
    <input type="text" name="diameter" value="<?php echo htmlspecialchars($astro->diameter); ?>" required>

    <label>Masa:</label>
    <input type="text" name="mass" value="<?php echo htmlspecialchars($astro->mass); ?>" required>

    <label>Año de Descubrimiento:</label>
    <input type="text" name="discovery_year" value="<?php echo htmlspecialchars($astro->discovery_year); ?>" required>

    <label>Descubierto por:</label>
    <input type="text" name="discovered_by" value="<?php echo htmlspecialchars($astro->discovered_by); ?>" required>

    <label>Temperatura:</label>
    <input type="text" name="temperature" value="<?php echo htmlspecialchars($astro->temperature); ?>" required>

    <label>Imagen actual:</label>
    <img class="current-image" src="<?php echo htmlspecialchars($imagePath); ?>" alt="Imagen actual">

    <label>Seleccionar nueva imagen (opcional):</label>
    <input type="file" name="image">

    <button type="submit">Guardar cambios</button>
  </form>
</body>
</html>