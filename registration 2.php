<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrationkuku</title>
    <link type="text/css" href="stylesheet/registration.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header id="header">
        <div id="header-text">
            <div id="title" class="header-text"><a href="home.php">ESPACE MEMBRE</a></div>
            <div id="acc" class="header-text"><a href="home.php">ACCUEIL</a></div>
        </div>
        <div id="header-btn">
            <a href="registration.php"><button id="incri" class="btn-header">S'INSCRIRE</button></a>
            <a href="login.php"><button id="connec" class="btn-header">SE CONNECTER</button></a>
        </div>

    </header>

    <main>
        <img src="img/regis.png" alt="image" id="main-img">

        <form id="form" action="" method="POST" style="max-width:500px;margin:auto">
            <div class="input-container">
                <h2>Inscrivez-vous</h2>
            </div>
            <div class="input-container">
                <!-- user icon -->
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Nom complet" name="usrnm">
            </div>
            <div class="input-container">
                <!-- user icon -->
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Pseudo" name="usrspeudo">
            </div>

            <div class="input-container">
                <!-- envelope icon -->
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="Email" name="email">
            </div>

            <div class="input-container">
                <!-- key icon -->
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="mot de passe" name="psw">
            </div>
            <div class="input-container">
                <!-- key icon -->
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="confirmer votre mot de passe" name="psw">
            </div>
            <div class="input-container">
                <input type="checkbox" id="checkbox"> J'accepte les <a href="#">Termes & Conditions</a>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="input-container" id="Connectez-vous">
                <p>Vous avez déjà un compte? <a href="login.php">Connectez-vous</a></p>
            </div>
        </form>

    </main>

    <footer>
        <div id="droit">2018 © Tous les droits sont réservés. Site créé pas Oussoumane Mahaman.</div>
        <div id="list">
            <li><img src="img/f.jpg" alt="fb" class="li-img"></li>
            <li><img src="img/t.jpg" alt="twttr" class="li-img"></li>
            <li><img src="img/s.jpg" alt="skype" class="li-img"></li>
            <li><img src="img/l.png" alt="link" class="li-img"></li>
            <li><img src="img/p.png" alt="pin" class="li-img"></li>
        </div>
    </footer>

</body>

<script src="js/registration.js">
</script>


</html>