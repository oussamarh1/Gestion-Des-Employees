<?php
include "fonction.php";
$id=$_GET['id'];
$resultat = findByCondition("absence","employe_id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat d'absence de HARIT</title>
   
</head>

<body>
  
    <h3 class="text-center text-primary">Etat d'absence de HARIT</h3>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date d'absence</th>
                    <th>Total d'heure</th>
                    <th>Details</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultat as $r){?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['date_absence'] ?></td>
                        <td><?= $r['nombredheur'] ?></td>
                        <td><?= $r['detail'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>