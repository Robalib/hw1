<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: setLoginFlag.php");
        exit;
    }
?>

<html>

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
        <title>Home - GCDS</title>
        <link rel="stylesheet" href="hw1.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script src="home.js" defer></script>
    </head>
      <body>
        <header>
          <a>
          <div class="nuoviArrivi">
            <p>Utilizza il codice ‘SOFTPORN’ per avere il 20% di sconto - tutti gli ordini includono un ‘softporn’ laundry sticker | Spedizione gratuita da 150€</p>
          </div>
          </a>
          <nav>
            <div id="leftnav">
              <div>
                <a href="">
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
            <div id="simbols">
              <a id="simbol_iteu">it/eu</a>
              <a id="simbol_wallet"><img src="img/Wallet_disconnesso.svg" /></a>
              <a href="search_artist.php" id="simbol_spotify"><img src="img/spotify.png" /></a>
              <a id="simbol_account"><img src="img/alien-dark.webp" /></a>
              <a href="favourites.php" id="simbol_like"><span class="material-symbols-outlined">favorite</span></a>
            </div>
          </nav>
          <div id="it-eu" class="hidden">
            <div id="cercaPaese">
              <form>
                <input type="text" placeholder="Cerca un Paese">
              </form>
              <div>
                <h5>A</h5>
                <p>
                  <a>Albania</a><br>
                  <a>Andorra</a><br>
                  <a>Arabia Saudita</a><br>
                  <a>Australia</a><br>
                  <a>Austria</a>
                </p>
              </div>
              <div>
                <h5>B</h5>
                <p>
                  <a>Belgio</a><br>
                  <a>Bielorussia</a><br>
                  <a>Bosnia ed Erzegovina</a><br>
                  <a>Brasile</a><br>
                  <a>Bulgaria</a>
                </p>
              </div>
              <div>
                <h5>C</h5>
                <p>
                  <a>Canada</a><br>
                  <a>Cina</a><br>
                  <a>Cipro</a><br>
                  <a>Città del Vaticano</a><br>
                  <a>Corea del Sud</a><br>
                  <a>Croazia</a>
                </p>
              </div>
              <div>
                <h5>D</h5>
                <p>
                  <a>Danimarca</a>
                </p>
              </div>
              <div>
                <h5>E</h5>
                <p>
                  <a>Emirati Arabi Uniti</a><br>
                  <a>Estonia</a>
                </p>
              </div>
              <div>
                <h5>F</h5>
                <p>
                  <a>Finlandia</a><br>
                  <a>Francia</a>
                </p>
              </div>
              <div>
                <h5>G</h5>
                <p>
                  <a>Georgia</a><br>
                  <a>Germania</a><br>
                  <a>Giappone</a><br>
                  <a>Gibilterra</a><br>
                  <a>Grecia</a><br>
                  <a>Groenlandia</a><br>
                  <a>Guadalupa</a><br>
                  <a>Guernsey</a>
                </p>
              </div>
              <div>
                <h5>H</h5>
                <p>
                  <a>Hong Kong</a>
                </p>
              </div>
              <div>
                <h5>I</h5>
                <p>
                  <a>Irlanda</a><br>
                  <a>Islanda</a><br>
                  <a>Isola Bouvet</a><br>
                  <a>Isola di Man</a><br>
                  <a>Isole Åland</a><br>
                  <a>Isole Fær Øer</a><br>
                  <a>Israele</a><br>
                  <a>Italia</a>
                </p>
              </div>
              <div>
                <h5>J</h5>
                <p>
                  <a>Jersey</a>
                </p>
              </div>
              <div>
                <h5>K</h5>
                <p>
                  <a>Kosovo</a><br>
                  <a>Kuwait</a>
                </p>
              </div>
              <div>
                <h5>L</h5>
                <p>
                  <a>Lettonia</a><br>
                  <a>Liechtenstein</a><br>
                  <a>Lituania</a><br>
                  <a>Lussemburgo</a>
                </p>
              </div>
              <div>
                <h5>M</h5>
                <p>
                  <a>Macao</a><br>
                  <a>Macedonia del Nord</a><br>
                  <a>Malta</a><br>
                  <a>Messico</a><br>
                  <a>Moldavia</a><br>
                  <a>Monaco</a><br>
                  <a>Montenegro</a>
                </p>
              </div>
              <div>
                <h5>N</h5>
                <p>
                  <a>Norvegia</a>
                </p>
              </div>
              <div>
                <h5>P</h5>
                <p>
                  <a>Paesi Bassi</a><br>
                  <a>Polonia</a><br>
                  <a>Portogallo</a>
                </p>
              </div>
              <div>
                <h5>Q</h5>
                <p>
                  <a>Qatar</a>
                </p>
              </div>
              <div>
                <h5>R</h5>
                <p>
                  <a>Regno Unito</a><br>
                  <a>Repubblica Ceca</a><br>
                  <a>Réunion</a><br>
                  <a>Romania</a>
                </p>
              </div>
              <div>
                <h5>S</h5>
                <p>
                  <a>San Marino</a><br>
                  <a>Serbia</a><br>
                  <a>Singapore</a><br>
                  <a>Slovacchia</a><br>
                  <a>Slovenia</a><br>
                  <a>Spagna</a><br>
                  <a>Stati Uniti d'America</a><br>
                  <a>Svezia</a><br>
                  <a>Svizzera</a>
                </p>
              </div>
              <div>
                <h5>T</h5>
                <p>
                  <a>Turchia</a>
                </p>
              </div>
              <div>
                <h5>U</h5>
                <p>
                  <a>Ucraina</a><br>
                  <a>Ungheria</a>
                </p>
              </div>
            </div>
          </div>
          <div id="tendina_uomo" class="hidden">
            <div class="tendina">
              <div>
                <a><h4>view all</h4></a>
              </div>
              <div>
                <a><h4>saldi</h4></a>
              </div>
              <div>
                <a><h4>abbigliamento</h4></a>
                <a>Giacche e cappotti</a><br>
                <a>Maglieria</a><br>
                <a>Felpe</a><br>
                <a>T-shirt e Camicie</a><br>
                <a>Pantaloni e Shorts</a><br>
                <a>Intimo</a><br>
                <a>Costumi da bagno</a>
              </div>
              <div>
                <a><h4>scarpe</h4></a>
                <a>Sneakers</a><br>
                <a>Mocassini e Mule</a><br>
                <a>Ciabatte</a>
              </div>
              <div>
                <a><h4>accessori</h4></a>
                <a>Calzini</a><br>
                <a>Cappelli</a><br>
                <a>Borse</a><br>
                <a>Altri Accessori</a><br>
                <a>Occhiali da sole</a><br>
                <a>Gadget</a>
              </div>
              <div>
                <a><h4>capri edition</h4></a>
              </div>
              <div>
                <a><h4>gift card</h4></a>
              </div>
            </div>
          </div>
          <div id="tendina_donna" class="hidden">
            <div class="tendina">
              <div>
                <a><h4>view all</h4></a>
              </div>
              <div>
                <a><h4>saldi</h4></a>
              </div>
              <div>
                <a><h4>abbigliamento</h4></a>
                <a>Giacche e cappotti</a><br>
                <a>Maglieria</a><br>
                <a>Felpe</a><br>
                <a>T-shirt</a><br>
                <a>Top e Body</a><br>
                <a>Abiti e Gonne</a><br>
                <a>Pantaloni e Shorts</a><br>
                <a>Intimo</a><br>
                <a>Costumi da bagno</a>
              </div>
              <div>
                <a><h4>scarpe</h4></a>
                <a>Stivali</a><br>
                <a>Sandali e décolleté</a><br>
                <a>Mocassini e Mule</a><br>
                <a>Sneakers</a><br>
                <a>Ciabatte</a>
              </div>
              <div>
                <a><h4>accessori</h4></a>
                <a>Borse</a><br>
                <a>Cappelli</a><br>
                <a>Calzini</a><br>
                <a>Altri Accessori</a><br>
                <a>Occhiali da sole</a><br>
                <a>Gadget</a>
              </div>
              <div>
                <a><h4>capri edition</h4></a>
              </div>
              <div>
                <a><h4>gift card</h4></a>
              </div>
            </div>
          </div>
          <div id="wallet" class="hidden">
            <div>
              <img src="img/logo-dark.webp" />
              <p>Connect your wallet</p>
              <button>Install Metamask wallet<img src="img/metamask.webp" /></button>
              <button>Install Coinbase wallet<img src="img/coinbase.svg" /></button>
              <button>Wallet Connect<img src="img/walletconnection.svg" /></button>
            </div>
          </div>
          <div id="account" class="hidden">
            <div id="tendina_account">
              <div>
                <h1>Account</h1>
              </div>
                <div>
                <p><?php echo $userinfo['name']." ".$userinfo['surname']."<br>username: ".$userinfo['username']."<br>e-mail: ".$userinfo['email'] ?></p>
                </div>
              <div>
              <a href='logout.php'>Logout</a>
              </div>
            </div>
          </div>
        </header>
        <section> 
            <a id="immaginePrincipale">
            </a>
          <div>
            <h1>SS24 Spring Pack</h1>
          </div>
          <div id="container">
            <div class="item">
              <a>
                <img data-index="0" src="img/cropped_t-shirt.webp" />
              </a>
              <a>
                Gcds Logo Lounge Cropped T-shirt
              </a>
              <p>
                €95
              </p>
            </div>
            <div class="item">
              <a>
                <img data-index="1" src="img/bikini.webp" />
              </a>
              <a>
                Logo Bikini Bra
              </a>
              <p>
                €120
              </p>
            </div>
            <div class="item">
              <a>
                <img data-index="2" src="img/tank_top.webp" />
              </a>
              <a>
                Gcds Logo Lounge Tank Top
              </a>
              <p>
                €110
              </p>
            </div>
            <div class="item">
              <a>
                <img data-index="3" src="img/socks.webp" />
              </a>
              <a>
                Ti Amo Gcds Socks
              </a>
              <p>
                €40
              </p>
            </div>
            <div class="item">
              <a>
                <img data-index="4" src="img/swim_shorts.webp" />
              </a>
              <a>
                Gcds Logo Lounge Swim Shorts
              </a>
              <p>
                €175
              </p>
            </div>
            <div class="item">
              <a>
                <img data-index="5" src="img/hat.webp" />
              </a>
              <a>
                Ti Amo Gcds Baseball Hat
              </a>
              <p>
                €75
              </p>
            </div>
          </div>
          <a href="collection.php" id="acquistaOra">
            acquista ora
          </a>
          <div id="blackContainer">
            <div id="blackContainerLeft">
              <div id="ShopByCategory">
                <p>Shop by category</p>
              </div>
              <div id="hashtag">
                <a class="white">#NEW IN SS24</a>
                <a class="grey">#TI AMO GCDS</a>
                <a class="white">#CAPRI CAPSULE</a><br>
                <a class="grey">#GCDS MINI</a>
                <a class="white">#GCDS JUNIOR</a>
                <a class="grey">#ACCESSORI</a><br>
                <a class="white">#LOGO LOUNGE</a>
              </div>
            </div>
            <a id="blackContainerRight" href="">
            </a>
          </div>
        </section>
        <footer>
          <div id="signInSection">
            <h2>Resta Aggiornato</h2>
            <p>Unisciti alla community GCDS e rimani aggiornato sulle 
              <strong>ultime news</strong>, i <strong>nuovi arrivi</strong> 
              e le <strong>promozioni esclusive.</strong>
            </p>
            <form id="email">
              <input type="text" placeholder="E-mail*" name="email_newsletter">
              <button type="submit"><img src="img/arrow_right_icon.png" /></button>
            </form>
            <p>@gcdswear</p>
            <div id="social">
              <a href="https://www.instagram.com/gcdswear/">
                <img src="img/instagram-50.svg" />
              </a>
              <a href="https://www.youtube.com/c/GCDS-it">
                <img src="img/youtube_icon.png" />
              </a>
              <a href="https://twitter.com/GCDSwear">
                <img src="img/twitter-x-logo.png" />
              </a>
              <a href="https://www.facebook.com/gcdswear">
                <img src="img/facebook_icon.jpg" />
              </a>
              <a href="https://vm.tiktok.com/ZM8qaK23F/">
                <img src="img/logo-tiktok.svg" />
              </a>
            </div>
          </div>
          <div id="info">
            <div>
              <h3>Azienda</h3>
              <p>About us<br>Store Locator<br>Iscriviti alla Newsletter<br>Gift Card</p>
            </div>
            <div>
              <h3>Legal</h3>
              <p>Privacy Policy<br>Termini e Condizioni di vendita<br>Termini e Condizioni 
                di vendita NFT<br>Condizioni d'uso<br>Certilogo</p>
            </div>
            <div>
              <h3>servizio clienti</h3>
              <p>Contattaci<br>FAQ<br>FAQ NFT<br>Spedizioni<br>Resi e Rimborsi</p>
            </div>
          </div>
          <div id="address">
            <p>GCDS S.r.l - P-IVA 09146210969</p>
          </div>
        </footer>
      </body>
</html>