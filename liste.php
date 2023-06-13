<?php
include "fonction.php";

$employe = employerEtdepartement();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e9884cf8fa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/second.css">
  <title>Liste Employés</title>

</head>

<body>
  <?php include("_menu.php"); ?>


  <div class="container">

    <h5 class="text-center text-success my-5">Liste des <?= count($employe) ?> Employee<?= (count($employe) > 1) ? "s" : ""  ?></h5>

    <table class="table table-striped ">
      <thead>
        <a href="create.php" class="btn btn-success btn_s"><i class="fas fa-user-plus"></i></a>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">image</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">E-mail</th>
          <th scope="col">Numero</th>
          <th scope="col">Departement</th>
          <th scope="col">Code Barre</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($employe as $p) { ?>
          <tr>

            <th><?= $p['id'] ?></th>
            <th class="image"><img src="<?= $p['chemin'] ?>" alt="" width="70"></th>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['prenom'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['num'] ?></td>
            <td><?= $p['nomdepartement'] ?></td>
            <td class="code"><img alt='Barcode Generator TEC-IT' src='https://barcode.tec-it.com/barcode.ashx?data=<?= $p['id'] ?>&code=&translate-esc=true' /></td>

            <td>

              <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $p['id'] ?>" onclick="return confirm('Supprimer?')"><i class="fas fa-trash-alt"></i></a>
              <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $p['id'] ?>"><i class="fas fa-edit"></i></a>
              <a class="btn btn-success btn-sm" href="testcard.php?id=<?= $p['id'] ?>"><i class="fas fa-id-card"></i></a>
              <a class="btn btn-info btn-sm" href="attestation.php?id=<?= $p['id'] ?>"><i class="fas fa-file-alt"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>

    </table>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>