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
        <link rel="stylesheet" href="style1.css">
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
            <form class="form-horizontal" action="index1.php" method="post">
                <fieldset>
                    <legend>Formulaire d'inscription</legend>
                    <?php
                    if (isset($_POST['submit'])) {
                        if (isset($_POST['name']) && preg_match('/[A-Z]+[a-z]+/', $_POST['name']) && htmlspecialchars($_POST['name'])) {
                            ?><p>Votre nom est : <?php echo $_POST['name']; ?></p>
                            <?php
                        } else if (empty($_POST['name'])) {
                            ?><div class="form-group">
                                <label for="name" class="col-lg-2 control-label">Nom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Dubois" type="text" name="name">
                                    <p>Veuillez remplir ce champ</p>
                                </div>
                            </div><?php
                        } else {
                            ?><div class="form-group">
                                <label for="name" class="col-lg-2 control-label">Nom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Dubois" type="text" name="name">
                                    <p>Ce champ est invalide</p>
                                </div>
                            </div>
                            <?php
                        }
                        if (isset($_POST['firstName']) && preg_match('/[A-Z]+[a-z]+/', $_POST['firstName']) && htmlspecialchars($_POST['firstName'])) {
                            ?><p>Votre prénom est : <?php echo $_POST['firstName'] ?></p><?php
                        } else if (empty($_POST['firstName'])) {
                            ?><div class="form-group">
                                <label for="firstName" class="col-lg-2 control-label">Prénom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Jean" type="text" name="firstName">
                                    <p>Veuillez remplir ce champ</p>
                                </div>
                            </div><?php
                        } else {
                            ?><div class="form-group">
                                <label for="firstName" class="col-lg-2 control-label">Prénom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Jean" type="text" name="firstName">
                                    <p>Ce champ est invalide</p>
                                </div>
                            </div>
                            <?php
                        }
                        if (!empty($_POST['age']) && htmlspecialchars($_POST['age'])) {
                            ?><p>Vous êtes né le <?php echo $_POST['age'] ?></p><?php
                        } else if (empty($_POST['age'])) {
                            ?><div class="form-group">
                                <label for="age" class="col-lg-2 control-label">Date de naissance</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="jj/mm/aaaa" type="date" name="age">
                                    <p>Veuillez remplir ce champ</p>
                                </div>
                            </div><?php
                        }
                        if (isset($_POST['country'])) {
                            ?><p>Votre pays de naissance est <?php echo $_POST['country'] ?></p>
                            <?php
                        } else if (empty($_POST['country'])) {
                            ?><div class="form-group">
                                <label for="country" class="col-lg-2 control-label">Pays de naissance</label>
                                <div class="col-lg-10">
                                    <select multiple="" class="form-control" name="country">
                                        <option>France</option>
                                        <option>Allemagne</option>
                                        <option>Royaume-Uni</option>
                                        <option>Espagne</option>
                                        <option>Portugal</option>
                                    </select>
                                    <p>Veuillez sélectionner un pays</p>
                                </div><?php
                            }
                            if (isset($_POST['nat'])) {
                                ?><p>Vous êtes de nationalité <?php echo $_POST['nat'] ?></p>
                                <?php
                            } else if (empty($_POST['nat'])) {
                                ?><div class="form-group">
                                    <label for="nat" class="col-lg-2 control-label">Nationalité</label>
                                    <div class="col-lg-10">
                                        <select multiple="" class="form-control" name="nat">
                                            <option>Française</option>
                                            <option>Allemande</option>
                                            <option>Anglaise</option>
                                            <option>Espagnole</option>
                                            <option>Portugaise</option>
                                        </select>
                                        <p>Veuillez sélectionner une nationalité</p>
                                    </div>
                                </div><?php
                            }
                            if (isset($_POST['adress']) && preg_match('^([1-9][0-9]*(?:-[1-9][0-9]*)*)[\s,-]+(?:(bis|ter|qua)[\s,-]+)?([\w]+[\-\w]*)[\s,]+([-\w].+)$^', $_POST['adress']) && htmlspecialchars($_POST['adress'])) {
                                ?><p>Votre adresse est : <?php echo $_POST['adress'] ?></p>
                                <?php
                            } else if (empty($_POST['adress'])) {
                                ?><div class="form-group">
                                    <label for="adress" class="col-lg-2 control-label">Adresse</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="54 rue sans nom" type="text" name="adress">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="adress" class="col-lg-2 control-label">Adresse</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="54 rue sans nom" type="text" name="adress">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['postalCode']) && preg_match('/[0-9]+/', $_POST['postalCode']) && htmlspecialchars($_POST['postalCode'])) {
                                ?><p>Votre code postal est <?php echo $_POST['postalCode'] ?></p>
                                <?php
                            } else if (empty($_POST['postalCode'])) {
                                ?><div class="form-group">
                                    <label for="postalCode" class="col-lg-2 control-label">Code Postal</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="75000" type="text" name="postalCode">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?>
                                <div class="form-group">
                                    <label for="postalCode" class="col-lg-2 control-label">Code Postal</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="75000" type="text" name="postalCode">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['town']) && preg_match('/[A-Z]+[a-z]+/', $_POST['town']) && htmlspecialchars($_POST['town'])) {
                                ?><p>Le nom de votre ville est <?php echo $_POST['town'] ?></p>
                                <?php
                            } else if (empty($_POST['town'])) {
                                ?><div class="form-group">
                                    <label for="town" class="col-lg-2 control-label">Ville</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="Paris" type="text" name="town">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?> <div class="form-group">
                                    <label for="town" class="col-lg-2 control-label">Ville</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="Paris" type="text" name="town">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['tel']) && preg_match('/[0-9]+/', $_POST['tel']) && htmlspecialchars($_POST['tel'])) {
                                ?><p>Votre numéro de téléphone est <?php echo $_POST['tel'] ?></p>
                                <?php
                            } else if (empty($_POST['tel'])) {
                                ?><div class="form-group">
                                    <label for="tel" class="col-lg-2 control-label">Téléphone</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="012033456789" type="text" name="tel">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="tel" class="col-lg-2 control-label">Téléphone</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="012033456789" type="text" name="postalCode">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['mail']) && preg_match('^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$^', $_POST['mail']) && htmlspecialchars($_POST['mail'])) {
                                ?><p>Votre adresse mail est  <?php echo $_POST['mail'] ?></p>
                                <?php
                            } else if (empty($_POST['mail'])) {
                                ?><div class="form-group">
                                    <label for="mail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="Email@email.com" type="text" name="mail">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="mail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputEmail" placeholder="Email@email.com" type="text" name="mail">
                                        <p>Ce champ est invalide</p>

                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['degrees']) && htmlspecialchars($_POST['degrees'])) {
                                ?><p>Votre niveau de diplôme est <?php echo $_POST['degrees'] ?></p>
                                <?php
                            } else if (empty($_POST['degrees'])) {
                                ?><div class="form-group">
                                    <label for="degrees" class="col-lg-2 control-label">Diplômes</label>
                                    <div class="col-lg-10">
                                        <select multiple="" class="form-control" name="degrees">
                                            <option>Sans</option>
                                            <option>Bac ou équivalent</option>
                                            <option>Bac +2</option>
                                            <option>Bac +3</option>
                                            <option>Bac +5 ou supérieur</option>
                                        </select>
                                        <p>Veuillez sélectionner un diplôme</p>
                                    </div>
                                </div><?php
                            }
                            if (isset($_POST['poleEmploi']) && preg_match('/[A-Z]+[0-9]/', $_POST['poleEmploi']) && htmlspecialchars($_POST['poleEmploi'])) {
                                ?><p>votre numéro Pôle Emploi est <?php echo $_POST['poleEmploi'] ?></p>
                                <?php
                            } else if (empty($_POST['poleEmploi'])) {
                                ?><div class="form-group">
                                    <label for="poleEmploi" class="col-lg-2 control-label">Numéro Pôle Emploi</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputName" placeholder="xxxxxxx" type="text" name="poleEmploi">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="poleEmploi" class="col-lg-2 control-label">Numéro Pôle Emploi</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputName" placeholder="xxxxxxx" type="text" name="poleEmploi">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['badges']) && preg_match('/[0-9]+/', $_POST['badges']) && htmlspecialchars($_POST['badges'])) {
                                ?><p>Vous avez <?php echo $_POST['badges'] . ' badges.' ?></p>
                                <?php
                            } else if (empty($_POST['badges'])) {
                                ?><div class="form-group">
                                    <label for="badges" class="col-lg-2 control-label">Nombre de badges Codecamy</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputName" type="text" name="badges">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="badges" class="col-lg-2 control-label">Nombre de badges Codecamy</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputName" type="text" name="badges">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (isset($_POST['codecademy']) && preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i', $_POST['codecademy']) && htmlspecialchars($_POST['codecademy'])) {
                                ?><p>Le lien vers votre profil Codecademy est <?php echo $_POST['codecademy'] ?></p>
                                <?php
                            } else if (empty($_POST['codecademy'])) {
                                ?><div class = "form-group">
                                    <label for = "codecademy" class = "col-lg-2 control-label">Lien profil Codecademy</label>
                                    <div class = "col-lg-10">
                                        <input class = "form-control" id = "inputName" type = "url" name = "codecademy">
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class = "form-group">
                                    <label for = "codecademy" class = "col-lg-2 control-label">Lien profil Codecademy</label>
                                    <div class = "col-lg-10">
                                        <input class = "form-control" id = "inputName" type = "url" name = "codecademy">
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (!empty($_POST['hero']) && htmlspecialchars($_POST['hero'])) {
                                ?><p> <?php echo $_POST['hero'] ?></p>
                                <?php
                            } else if (empty($_POST['hero'])) {
                                ?><div class="form-group">
                                    <label for="hero" class="col-lg-2 control-label">Si vous étiez un/une super-héro/super-héroïne, qui seriez-vous? Et pourquoi?</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="textArea" name="hero"></textarea>
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?><div class="form-group">
                                    <label for="hero" class="col-lg-2 control-label">Si vous étiez un/une super-héro/super-héroïne, qui seriez-vous? Et pourquoi?</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="textArea" name="hero"></textarea>
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (!empty($_POST['hacks']) && htmlspecialchars($_POST['hacks'])) {
                                ?><p><?php echo $_POST['hacks'] ?></p>
                                <?php
                            } else if (empty($_POST['hacks'])) {
                                ?><div class="form-group">
                                    <label for="hacks" class="col-lg-2 control-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="textArea" name="hacks"></textarea>
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="hacks" class="col-lg-2 control-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="textArea" name="hacks"></textarea>
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                                <?php
                            }
                            if (!empty($_POST['exp']) && htmlspecialchars($_POST['exp'])) {
                                ?><p><?php echo $_POST['exp'] ?></p><?php
                            } else if (empty($_POST['exp'])) {
                                ?><div class="form-group">
                                    <label for="exp" class="col-lg-2 control-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                    <div class = "col-lg-10">
                                        <textarea class = "form-control" rows = "3" id = "textArea" name="exp"></textarea>
                                        <p>Veuillez remplir ce champ</p>
                                    </div>
                                </div><?php
                            } else {
                                ?><div class="form-group">
                                    <label for="exp" class="col-lg-2 control-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                    <div class = "col-lg-10">
                                        <textarea class = "form-control" rows = "3" id = "textArea" name="exp"></textarea>
                                        <p>Ce champ est invalide</p>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class = "form-group">
                                <div class = "col-lg-10 col-lg-offset-2">
                                    <button type = "reset" class = "btn btn-default" href="index1.php">Annuler</button>
                                    <button type = "submit" class = "btn btn-primary" name="submit">Valider</button>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="form-group">
                                <label for="name" class="col-lg-2 control-label">Nom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Dubois" type="text" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="col-lg-2 control-label">Prénom</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="Ex: Jean" type="text" name="firstName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="age" class="col-lg-2 control-label">Date de naissance</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="jj/mm/aaaa" type="date" name="age">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adress" class="col-lg-2 control-label">Adresse</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="54 rue sans nom" type="text" name="adress">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="postalCode" class="col-lg-2 control-label">Code Postal</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="75000" type="text" name="postalCode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="town" class="col-lg-2 control-label">Ville</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="Paris" type="text" name="town">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel" class="col-lg-2 control-label">Téléphone</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="012033456789" type="text" name="tel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputEmail" placeholder="Email@email.com" type="text" name="mail">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class="col-lg-2 control-label">Pays de naissance</label>
                                <div class="col-lg-10">
                                    <select multiple="" class="form-control" name="country">
                                        <option>France</option>
                                        <option>Allemagne</option>
                                        <option>Royaume-Uni</option>
                                        <option>Espagne</option>
                                        <option>Portugal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nat" class="col-lg-2 control-label">Nationalité</label>
                                <div class="col-lg-10">
                                    <select multiple="" class="form-control" name="nat">
                                        <option>Française</option>
                                        <option>Allemande</option>
                                        <option>Anglaise</option>
                                        <option>Espagnole</option>
                                        <option>Portugaise</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="degrees" class="col-lg-2 control-label">Diplômes</label>
                                <div class="col-lg-10">
                                    <select multiple="" class="form-control" name="degrees">
                                        <option>Sans</option>
                                        <option>Bac ou équivalent</option>
                                        <option>Bac +2</option>
                                        <option>Bac +3</option>
                                        <option>Bac +5 ou supérieur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="poleEmploi" class="col-lg-2 control-label">Numéro Pôle Emploi</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" placeholder="xxxxxxx" type="text" name="poleEmploi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="badges" class="col-lg-2 control-label">Nombre de badges Codecamy</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="inputName" type="text" name="badges">
                                </div>
                            </div>
                            <div class = "form-group">
                                <label for = "codecademy" class = "col-lg-2 control-label">Lien profil Codecademy</label>
                                <div class = "col-lg-10">
                                    <input class = "form-control" id = "inputName" type = "url" name = "codecademy">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hero" class="col-lg-2 control-label">Si vous étiez un/une super-héro/super-héroïne, qui seriez-vous? Et pourquoi?</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="hero"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hacks" class="col-lg-2 control-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="hacks"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exp" class="col-lg-2 control-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                <div class = "col-lg-10">
                                    <textarea class = "form-control" rows = "3" id = "textArea" name="exp"></textarea>
                                </div>
                            </div>
                            <div class = "form-group">
                                <div class = "col-lg-10 col-lg-offset-2">
                                    <button type = "reset" class = "btn btn-default">Annuler</button>
                                    <button type = "submit" class = "btn btn-primary" name="submit">Valider</button>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                </fieldset>
            </form>
        </div>
        <?php
        include 'footer.php';
        ?>