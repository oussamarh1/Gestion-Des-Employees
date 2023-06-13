<?php 
include "fonction.php";
$id=$_GET['id'];
supprimer($id,"departement");
header("location:liste_departement.php");