<?php 
include "fonction.php";


extract($_POST);
//ar_dump($_POST);
$infos=$_FILES['chemin'];

$new_name=time() . $infos['name'];
$chemin="img/". $new_name;

move_uploaded_file($infos['tmp_name'], $chemin);
ajouter_employer($nom,$prenom,$email,$num,$departement_id,$chemin);
header("location:liste.php");
