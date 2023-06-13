<?php 
include "fonction.php";

extract($_POST);
modifier_employer($nom,$prenom,$email,$num,$id);
header("location:liste.php");

?>