<?php
include "fonction.php";
$employers=findById($_GET['id'],"employer");

$employer=all("employer");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="idcard.css"  />
</head>


<body>

    <div class="center">

      
        <div class="card orange">
          <div class="additional">
            <div class="user-card">
              <div class="level center">
              
              </div>
              <div class="points center">
              <img alt='Barcode Generator TEC-IT'
       src='https://barcode.tec-it.com/barcode.ashx?data=<?=$_GET['id']?>&code=&translate-esc=true'  height="50"/>

              </div>
              
              <a> <img src="<?=$employers ['chemin']?>" alt=""width="150"></a>
            </div>
            <div class="more-info">
            <h1><?=$employers['nom']?> <?=$employers['prenom']?></h1>
              <div class="coords">
                <span>Département</span>
                <span>Informaticien</span>
              </div>
              <div class="coords">
                <span>Numéro</span>
                <span class="value"><?=$employers['num']?></span>
              </div>
              <div class="coords">
                <span>Email</span>
                <span class="value"><?=$employers['email']?></span>
              </div>

              <div class="stats">
                <div>
                  <div class="title">Nom</div>
                  <i class="fa fa-trophy"></i>
                  <div class="value"><?=$employers['nom']?></div>
                </div>
                <div>
                  <div class="title">Prenom</div>
                  <i class="fa fa-gamepad"></i>
                  <div class="value"><?=$employers['prenom']?></div>
                </div>
             
                <div>
                  <div class="title">Id</div>
                  <i class="fa fa-group"></i>
                  <div class="value"><?=$employers['id']?></div>
                </div>
               
              </div>
            </div>
          </div>
          <!-- <div class="general">
            <h1><?=$user['nom']?> <?=$user['prenom']?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
            <span class="more">Mouse over the card for more info</span>
          </div> -->
        </div>
<div style="text-align:center">      <button class="btn btn-warning" href="" onclick="window.print()">Imprimer</a>
</div>      </div>
    
</body>
</html>