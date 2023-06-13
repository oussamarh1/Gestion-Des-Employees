<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">GESTION DES EMPLOYEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Employer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="liste.php">Liste des employer</a></li>
                            <li><a class="dropdown-item" href="create.php">Nouveau</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="liste_departement.php">Liste des departement</a></li>
                            <li><a class="dropdown-item" href="create_departement.php">Nouveau</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Absences
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="liste_abs.php">Liste des absences</a></li>
                            <li><a class="dropdown-item" href="create_abs.php">Nouveau</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Conge
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="create_conge.php">Nouveau</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                </ul>

            </div>
        </div>
    </nav>
</body>

</html>