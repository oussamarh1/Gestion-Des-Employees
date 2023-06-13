<?php
include "fonction.php";
extract($_GET);
$conge=congeEtemplpyer($id);
// var_dump($conge);

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

<body>
<?php include("_menu.php"); ?>
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
<div class="card p-3 my-5">
<div class="card-header">
    <h3>Accusé de congé</h3>
</div>
<p class="lead">
 <?=$conge['nom']?> <?=$conge['prenom']?>
 Nous avons pris connaissance de votre demande de congé pour création ou pour 
 reprise d'entreprise en date d'aujourd'huit </p>
<p class="lead">nous avons le plaisir de vous donner notre accord pour ce congé qui
   durera du <?php echo $conge['date_debut'] ; ?> au <?php echo $conge['date_fin']; ?>.
</p>
<h3 class="lead"> La direction</h3>
<div class="my-4">
    <a href="#"
    onclick="window.print()"
    class="btn btn-sm btn-primary">
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