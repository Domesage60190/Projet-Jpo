<?php

require_once "database.php";
$numeroSalle = array();

if (isset($_GET["section"])){

    $id_formation = $_GET["section"];

    $numeroSalle = get_trajet($id_formation);
        
    
    echo($numeroSalle[0]["numerosalle"]);


} ?>
