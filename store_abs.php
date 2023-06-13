<?php
include "fonction.php";
extract($_POST);
ajouter_absence($nombredheur,$detail,$employe_id);
header("location:liste_abs.php")

?>