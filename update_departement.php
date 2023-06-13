<?php 
include "fonction.php";

extract($_POST);
modifier_departement($nomdepartement,$id);
header("location:liste_departement.php");

?>