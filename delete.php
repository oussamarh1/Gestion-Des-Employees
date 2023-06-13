<?php 
include "fonction.php";
$id=$_GET['id'];
supprimer($id,"employer");
header("location:liste.php");