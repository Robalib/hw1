<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: setLoginFlag.php");
        exit;
    }
?>
<?php 
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $query = "SELECT * FROM users WHERE id = $userid";
    $res_1 = mysqli_query($conn, $query);
    $userinfo = mysqli_fetch_assoc($res_1);   
  ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Preferiti - GCDS</title>
        <link rel="stylesheet" href="favourites.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />        
        <script src="favourites.js" defer></script>
    </head>
    <body>
        <header>
            <nav>
            <div id="leftnav">
                <div>
                <a href="home.php">
                <img id="logo" src="img/logo-dark.webp" />
                </a>
                </div>
                <div id="headerLink">
                <div><a>nuovi arrivi</a></div>
                <div id="uomo"><a>uomo</a></div>
                <div id="donna"><a>donna</a></div>
                <div><a>unisex</a></div>
                <div><a>gcds world</a></div>
                <div id="vipButton"><a>become a vip member</a></div>
                </div>
                <div id="menu">
                <div></div>
                <div></div>
                <div></div>
                </div>
            </div>
        </header>
        <section id="title">
            <h1>i tuoi preferiti</h1>
        </section>
        <section id="gallery">
        </section>
        <div id='link'>
            <a href="collection.php">Trova articoli de aggiungere ai preferiti</a>
        </div>
    </body>
</html>