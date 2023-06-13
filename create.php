<?php
include "fonction.php";

$depa = all("departement");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/second.css">
    <title>Nouveau Employe</title>
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
                        <div class="title">Ajouter un nouveau Employe</div>
                        <form action="store.php" method="POST" enctype="multipart/form-data">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nom</span>
                                    <input type="text" name="nom" id="nom" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <span class="details">Prénom</span>
                                    <input type="text" name="prenom" id="prenom" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="email" name="email" id="email" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <span class="details">Numéro</span>
                                    <input type="text" name="num" id="num" autocomplete="off">
                                </div>
                                <div class="input-box">
                                    <span class="details">Département</span>
                                    <select class="form-control" type="text" name="departement_id" id="departement_id">
                                        <?php foreach ($depa as $d) { ?>
                                            <option value="<?= $d['id'] ?>">
                                                <?= $d['nomdepartement'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Photo</span>
                                    <input type="file" name="chemin" id="chemin">
                                </div>

                                <div class="box-submit">
                                    <input type="submit" value="Enregister">
                                </div>
                        </form>
                    </div>
                </div>
            </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>