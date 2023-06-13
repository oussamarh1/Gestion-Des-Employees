<?php
include "fonction.php";
$employer=all("employer");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/second.css">
    <title>Nouvelle absence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include("_css.php"); ?>
</head>

<body>
<?php include("_menu.php"); ?>
<div class="container">
<div class="containers">
        <div class="add-box">   
            <div class="show-info">
                <div class="form-box">
                <div class="title">Demande congé</div>
                <form action="store_conge.php" method="POST">
                    <div class="user-details">
                            <div class="input-box">
                                <span class="details">Début de congé</span>
                                <input type="date" name="date_debut">
                            </div>
                            <div class="input-box">
                                <span class="details">Fin de congé</span>
                                <input type="date"  name="date_fin" >
                            </div>
                            <div class="input-box">
                                <span class="details">Employé</span>
                                <select class="form-control" type="text" name="employe_id" id="employe_id" >
                                    <?php foreach($employer as $e) {?>
                                    <option value="<?=$e['id']?>">
                                    <?=$e['nom']?> <?=$e['prenom']?>

                                    </option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="input-box"></div>
                    <div class="box-submit">
                        <input type="submit" value="Congé">
                    </div>
                </form>
            </div>  
            </div> 
</div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>