<?php

require_once("./src/models/AstroModel.php");
require_once("./src/classes/Astro.php");

class AstroController{
    function viewAllAstros() {
        $astro = new AstroModel();
        $astros = $astro->getAllAstros();
        include("./src/views/astros/viewAllAstros.php");
    }

    function viewAstro() {
        $id=$_GET["id"];
        $astroModel = new AstroModel();
        $astro = $astroModel->getAstroById($id);
        include("./src/views/astros/viewAstro.php");
    }

    function viewCreatingAstro() {
        include("./src/views/astros/viewCreatingAstro.php");
    }

function createAstro() {
    try {

        if(isset($_POST) && isset($_FILES)){

            $name            = $_POST["name"];
            $description     = $_POST["description"];
            $type            = $_POST["type"];
            $diameter        = $_POST["diameter"];
            $mass            = $_POST["mass"];
            $discovery_year  = $_POST["discovery_year"];
            $discovered_by   = $_POST["discovered_by"];
            $temperature     = $_POST["temperature"];

            $img  = $_FILES["image"]["name"];
            $temp = $_FILES["image"]["tmp_name"];

            if(
                $name=="" || $description=="" || $type=="" ||
                $diameter=="" || $mass=="" || $discovery_year=="" ||
                $discovered_by=="" || $temperature=="" || $img==""
            ){
                echo "Faltan datos por completar";
                return 0;
            }

            $astro = new Astro();
            $astro->name           = $name;
            $astro->description    = $description;
            $astro->type           = $type;
            $astro->diameter       = $diameter;
            $astro->mass           = $mass;
            $astro->discovery_year = $discovery_year;
            $astro->discovered_by  = $discovered_by;
            $astro->temperature    = $temperature;
            $astro->image          = $img;

            $model = new AstroModel();
            $model->createAstro($astro);

            move_uploaded_file($temp, "./src/public/astro_images/".$img);

            header("Location: ".BASE_URL."?controller=AstroController&action=viewAllAstros");
            exit;
            }

        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }


    function viewDeletingAstro() {
        $id=$_GET["id"];
        $astroModel = new AstroModel();
        $astro = $astroModel->getAstroById($id);
        include("./src/views/astros/viewDeletingAstro.php");
    }

    function deleteAstro() {
        $id=$_GET["id"];
        $astroModel = new AstroModel();
        $astroModel->deleteAstroById($id);
        header("Location: ".BASE_URL."?controller=AstroController&action=viewAllAstros");
    }
}