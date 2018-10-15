<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link type="text/css" href="stylesheet/homestyle.css" rel="stylesheet">
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

    <img src="img/main.png " alt="image here " id="main-img">

    <section id="letter">
        <p id="title2">Newsletter</p>
        <p id="txt">Abonnez-vous à notre newsletter pour dernières nouvelles, promotions et offers.</p>
        <form method="" id="letter-input">
            <input type="email" id="mail-input" placeholder="Enter Email" required>
            <button id="send-btn">
                    <img src="img/send.png " alt="image here " id="send-img">
            </button>
        </form>
    </section>

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
    <a href="#header" id="scroll"><img src="img/icon.png" width="30px" height="30px"></a>

</body>

</html>