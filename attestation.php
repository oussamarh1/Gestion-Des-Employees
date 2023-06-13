<?php
include "fonction.php";
$employers = findById($_GET['id'], "employer");

$employer = all("employer");
//var_dump($att);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9884cf8fa.js" crossorigin="anonymous"></script>
    <?php include("_css.php"); ?>
</head>
<style>
    body {

        background-image: url('oo.avif');
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>Attesation De Travail</h3>
                    </div>
                    <p class="lead">
                        <?= $employers['nom'] ?> <?= $employers['prenom'] ?>
                        est actuellement employé avec moi dans les activités suivantes
                    </p>
                    <p class="lead">
                        Nous soussignés société LEAN domiciliée à CASABLANCA , attestons par la présente que Mr (Mlle)(Mme) <?= $employers['nom'] ?> <?= $employers['prenom'] ?> , Immatriculé à la CNSS sous le numéro <?= $employers['id'] ?> , est employé au sein de notre société en qualité de fonctionaire .

                    </p>

                    <p class="lead">Et ce depuis le 24/02/2019 à ce jour . </p>
                    <p class="lead">La présente attestation lui est délivrée à sa demande pour servir et valoir ce que de droit. </p>
                    <h4>La direction</h4>
                    <p class="m-5">

                    </p>
                    <div class="my-4">
                        <a href="#" onclick="window.print()" class="btn btn-sm btn-primary">
                            <i class="fas fa-print">

                            </i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>