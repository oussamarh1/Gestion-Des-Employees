<?php
include "fonction.php";

$departement = all("departement");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e9884cf8fa.js" crossorigin="anonymous"></script>
  <title>Liste Département</title>
  <?php include("_css.php"); ?>
</head>

<body>

  <?php include("_menu.php"); ?>

  <div class="container">

    <h5 class="text-center text-success my-5">Liste des <?= count($departement) ?> departemente<?= (count($departement) > 1) ? "s" : ""  ?></h5>

    <table class="table table-striped ">
      <thead>
        <a href="create_departement.php" class="btn btn-success btn_s"><i class="fas fa-user-plus"></i></a>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($departement as $d) { ?>
          <tr>

            <th><?= $d['id'] ?></th>
            <td><?= $d['nomdepartement'] ?></td>


            <td>

              <a class="btn btn-danger btn-sm" href="delete_departement.php?id=<?= $d['id'] ?>" onclick="return confirm('Supprimer?')"><i class="fas fa-trash-alt"></i></a>
              <a class="btn btn-warning btn-sm" href="edit_departement.php?id=<?= $d['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>

    </table>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>