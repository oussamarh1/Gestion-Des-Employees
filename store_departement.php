<?php
include "fonction.php";
extract($_POST);
ajouter_departement($nomdepartement);
header("location:liste_departement.php");


?>