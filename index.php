<?php
include("fonction.php");
$employe = employerEtdepartement();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Admin | Dashboard</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1></h1>
        </div>
        <ul>
            <li><i class="fas fa-home"></i> Dashboard</li>
            <li><i class="fas fa-users"></i> <a href="liste.php"> Employees</a></li>
            <li><i class="fas fa-building"></i><a href="liste_departement.php">Départements</a> </li>
            <li> <i class="fas fa-tasks"></i>Taches</li>
            <li> <i class="fas fa-street-view"></i><a href="create_conge.php">Congés</a> </li>
            <li> <i class="fas fa-cogs"></i>Règlages</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="chercher">
                </div>
                <div class="user">
                    <a href="create.php">Ajouter un employe</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1> <a href="liste.php"><?php
                                                    echo countItems('id', 'employer') ?></a></h1>
                        <h3>Employées</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1> <a href="liste.php"><?php
                                                    echo countItems('id', 'departement') ?></a></h1>
                        <h3>Département</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1> <a href="liste.php"><?php
                                                    echo countItems('id', 'absence') ?></a></h1>
                        <h3>Absences</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <h3>Projets en cours</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Paiements</h2>
                        <a href="#" class="btn">Voir plus</a>
                    </div>
                    <?php foreach ($employe as $p) { ?>
                        <div class="info">

                            <div class="nom-box">
                                <p><?= $p['nom'] ?></p>
                            </div>
                            <div class="action-box">
                                <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $p['id'] ?>"><i class="fas fa-edit"></i></a>
                            </div>

                        </div>
                    <?php } ?>
                </div>

                <div class="new-employee">
                    <div class="title">
                        <h2>Ajouter </h2>
                        <a href="#" class="btn">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>