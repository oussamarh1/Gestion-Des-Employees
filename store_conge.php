<?php
include "fonction.php";
extract($_POST);
$id=ajouter_conge($date_debut,$date_fin,$employe_id);
header("location:conge.php?id=$id")

?>