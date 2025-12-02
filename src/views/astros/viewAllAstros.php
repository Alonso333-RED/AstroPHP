<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Astros</title>
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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        .card {
            background-color: #400000;
            padding: 15px;
            border-radius: 0px;
            text-align: center;
            box-shadow: 0 0 10px #000;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3 {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #ffffffff;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            color: #ff0000ff;
            text-decoration: none;
            font-weight: bold;
        }

        .card a:hover {
            text-decoration: underline;
        }

        .no-image{
            width: 100%;
            height: 180px;
            background: #444;
            color: #aaa;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }
        .general-link {
            color: #ff0000ff;
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
        }
        .general-link:hover {
            text-decoration: underline;
            color: #ffffffff;
        }
    </style>
</head>
<body>

<h1>Lista de Astros</h1>

<a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewCreatingAstro" ?>">Crear Nuevo Astro</a>

<?php $basePath = './src/public/astro_images/'; ?>

<div class="grid">

    <?php foreach($astros as $a) { ?>
        
        <div class="card">

            <?php
                $imagePath = $basePath . $a->image;
                if (!empty($a->image) && file_exists($imagePath)) {
                    echo '<img src="' . htmlspecialchars($imagePath) . '" alt="' . htmlspecialchars($a->name) . '">';
                } else {
                    echo '<div class="no-image">Sin imagen</div>';
                }
            ?>

            <h3><?php echo htmlspecialchars($a->name); ?></h3>
            <a class="general-link" href="<?php echo BASE_URL."?controller=AstroController&action=viewAstro&id=$a->id" ?>">Ver objeto</a>
        
        </div>

    <?php } ?>

</div>

</body>
</html>
