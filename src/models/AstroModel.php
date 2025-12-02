<?php
require_once("./src/config/Config.php");
require_once("./src/classes/Astro.php");

class AstroModel {
    function getAllAstros() {
        $sql = "SELECT * FROM astros";
        $stm = Config::conectar()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_CLASS,"Astro");
    }

    function getAstroById($id) {
        $sql = "SELECT * FROM astros WHERE id = :id";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchObject("Astro");
    }

    function createAstro($astro) {
        $sql = "INSERT INTO astros (name, description, type, diameter, mass, discovery_year, discovered_by, temperature, image) 
                VALUES (:name, :description, :type, :diameter, :mass, :discovery_year, :discovered_by, :temperature, :image)";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindParam(':name', $astro->name);
        $stm->bindParam(':description', $astro->description);
        $stm->bindParam(':type', $astro->type);
        $stm->bindParam(':diameter', $astro->diameter);
        $stm->bindParam(':mass', $astro->mass);
        $stm->bindParam(':discovery_year', $astro->discovery_year);
        $stm->bindParam(':discovered_by', $astro->discovered_by);
        $stm->bindParam(':temperature', $astro->temperature);
        $stm->bindParam(':image', $astro->image);
        return $stm->execute();
    }

    function deleteAstroById($id) {
        $sql = "DELETE FROM astros WHERE id = :id";
        $stm = Config::conectar()->prepare($sql);
        $stm->bindParam(':id', $id);
        return $stm->execute();
    }
}