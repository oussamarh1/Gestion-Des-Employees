<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/second.css">
    <title>Nouveau Département</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>

    <div class="container">
        <div class="containers">
            <div class="add-box depart-box">
                <div class="show-info">
                    <div class="form-box">
                        <div class="title">Nouveau Département</div>
                        <form action="store_departement.php" method="POST">
                            <div class="user-details depart">
                                <div class="input-box">
                                    <span class="details">Nom de département</span>
                                    <input type="text" name="nomdepartement" id="nomdepartement">
                                </div>
                                <div class="input-box"></div>
                            </div>
                            <div class="box-submit">
                                <input type="submit" value="Ajouter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>