<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Partie 10</title>
        <!-- Bootstrap core CSS -->
        <link href="libs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- CSS perso -->
        <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Partie 10</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="index1.php">TP 1</a></li>
                        <li><a href="index2.php">TP 2</a></li>
                        <li><a href="index3.php">TP 3</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <form class="form-horizontal" action="index2.php" method="post">
                <fieldset>
                    <legend>Formulaire d'inscription</legend>
                    <?php
                    if (isset($_POST['submit'])) {
                        ?>
                        <div class="form-group">
                            <label for="gender" class="col-lg-3 control-label">Civilité</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="gender"value="<?php
                                if (isset($_POST['gender'])) {
                                    echo $_POST['gender'];
                                }
                                ?>">
                                    <option value="Civilité">Civilité</option>
                                    <option value="Madame"<?php
                                    if (isset($_POST['gender']) && $_POST['gender'] == "Madame") {
                                        echo "selected";
                                    }
                                    ?>>Madame</option>
                                    <option value="Monsieur"<?php
                                    if (isset($_POST['gender']) && $_POST['gender'] == "Monsieur") {
                                        echo "selected";
                                    }
                                    ?>>Monsieur</option>
                                </select>
                                <?php
                                if (isset($_POST['gender']) && $_POST['gender'] == "Civilité") {
                                    ?><p>Veuillez séléctionner votre genre</p><?php }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-lg-3 control-label">Nom</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Ex: Dubois" type="text" name="name"value="<?php
                                if (isset($_POST['name']) && preg_match('/[A-Z]+[a-z]+/', $_POST['name']) && htmlspecialchars($_POST['name'])) {
                                    echo $_POST['name'];
                                }
                                ?>">
                                       <?php if (empty($_POST['name'])) {
                                           ?>
                                    <p>Veuillez remplir ce champ</p>
                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstName" class="col-lg-3 control-label">Prénom</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Ex: Jean" type="text" name="firstName"value="<?php
                                if (isset($_POST['firstName']) && preg_match('/[A-Z]+[a-z]+/', $_POST['firstName']) && htmlspecialchars($_POST['firstName'])) {
                                    echo $_POST['firstName'];
                                }
                                ?>">
                                       <?php if (empty($_POST['firstName'])) {
                                           ?>
                                    <p>Veuillez remplir ce champ</p>
                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="age" class="col-lg-3 control-label">Date de naissance</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="jj/mm/aaaa" type="date" name="age"value="<?php
                                if (isset($_POST['age'])) {
                                    echo $_POST['age'];
                                }
                                ?>">
                                       <?php if (empty($_POST['age'])) {
                                           ?>
                                    <p>Veuillez remplir ce champ</p>
                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="work" class="col-lg-3 control-label">Société</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Travailleur & Cie" type="text" name="work"value="<?php
                                if (isset($_POST['work']) && htmlspecialchars($_POST['work'])) {
                                    echo $_POST['work'];
                                }
                                ?>">
                                       <?php if (empty($_POST['work'])) {
                                           ?>
                                    <p>Veuillez remplir ce champ</p>
                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class = "col-lg-10">
                                <button type = "reset" class = "btn btn-default">Annuler</button>
                                <button type = "submit" class = "btn btn-primary" name="submit">Valider</button>
                            </div>
                        </div>
                        <?php
                        if ($_POST['gender'] !== "Civilité" && !empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['age'])) {
                            ?>
                            <p>Vous êtes <?php echo $_POST['gender'] . ' ' . $_POST['name'] . ' ' . $_POST['firstName']; ?>, votre date de naissance est <?php echo $_POST['age']; ?> et vous travaillez chez <?php echo $_POST['work']; ?>.</p>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="form-group">
                            <label for="nat" class="col-lg-3 control-label">Civilité</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="gender">
                                    <option value="Civilité">Civilité</option>
                                    <option value="Madame">Madame</option>
                                    <option value="Monsieur">Monsieur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-lg-3 control-label">Nom</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Ex: Dubois" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstName" class="col-lg-3 control-label">Prénom</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Ex: Jean" type="text" name="firstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age" class="col-lg-3 control-label">Date de naissance</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="jj/mm/aaaa" type="date" name="age">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adress" class="col-lg-3 control-label">Société</label>
                            <div class="col-lg-9">
                                <input class="form-control" class="input" placeholder="Travailleur & Cie" type="text" name="work"value="">
                            </div>
                        </div>
                        <div class = "form-group">
                            <div class = "col-lg-10">
                                <button type = "reset" class = "btn btn-default center-block">Annuler</button>
                                <button type = "submit" class = "btn btn-primary center-block" name="submit">Valider</button>
                            </div>
                        </div>
                    <?php } ?>
                </fieldset>
            </form>
        </div>
        <?php
        include 'footer.php'
        ?>