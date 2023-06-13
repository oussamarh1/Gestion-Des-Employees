<?php 
include "fonction.php";
$id=$_GET['id'];//13
$departement=findById($id,"departement");


//print_r($departement);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition du  departement : <?=$departement['nom']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include("_css.php"); ?>
    <link rel="stylesheet" href="css/second.css">
</head>

<body>

<?php include("_menu.php"); ?>
  <div class="container">
<div class="containers">
        <div class="add-box depart-box">   
            <div class="show-info">
                <div class="form-box">
                <div class="title">Modifier le Département</div>
                <form action="update_departement.php" method="POST">
                <input type="hidden" name="id" id="" value="<?=$departement['id']?>">
                    <div class="user-details depart">
                            <div class="input-box">
                                <span class="details">Nom de département</span>
                                <input type="text"  name="nomdepartement" id="nomdepartement" value="<?=$departement['nomdepartement']?>">
                            </div>
                            <div class="input-box"></div>
                    </div>
                    <div class="box-submit">
                        <input type="submit" value="Modifier">
                    </div>    
                </form>
            </div>  
            </div> 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>