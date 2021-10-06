<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="javascript.js"></script>

    <title>Elecrogroup Interfoane Bucuresti</title>
  </head>

  <body class="" style="">

    <div class="container-fluid hidden-xs" id="divHeader">
      <div class="row h-100">
        <div class="flex-center pull-left" id="divLogo">
            <!-- <img src="logo-name.png" alt="" class="w-100 h-100" style=""> -->
          <div class="logo">
            <span class="logo-name"><b>ELECTROGRUP<br>INTERFOANE<br>BUCURESTI<br></b></span>
            <span class="logo-moto">o viata mai sigura</span>
          </div>
        </div>
        <div class="h-100 pull-left" id="divMoto">
          <div class="w-100 h-50 flex-center"><span class="moto">PREGATITI PENTRU CONFORTUL SI SIGURANTA DUMNEAVOASTRA</span></div>
          <div class="w-100 h-50 flex-center"><span class="call-tel">Sunati chiar acum pentru oferte personalizate la telefon&nbsp;</span><span class="nr-tel">0755.113.400 sau 0729.725.128</span></div>
        </div>
      </div>
    </div>

    <div class="container-fluid visible-xs" id="divHeaderXs">
      <div class="w-100 text-center">
        <span class="logo-name"><b>ELECTROGRUP INTERFOANE BUCURESTI</b></span>
      </div>
      <div class="w-100 text-center">
        <span class="logo-moto">o viata mai sigura</span>
      </div>
    </div>

    <nav role="navigation" class="navbar navbar-inverse pull-left" data-spy="affix" data-offset-top="60">
      <div class="navbar-header pull-right">
        <button class="navbar-toggle pull-left" id="buttonNavbarToggle" type="button" data-toggle="collapse" data-target="#divNavbarCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <form class="form-inline" id="formNavbar" method="post" action="produse.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
              <a href="cos.php" class="btn btn-default">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </div>
          </div>
        </form>
      </div>

      <div class="collapse navbar-collapse" id="divNavbarCollapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="index.html">Acasa</a></li>
          <li>
            <div class="dropdown-split">
              <a href="produse.php" class="btn">Produse</a>
              <a data-toggle="dropdown" class="btn" style="margin-left: -18px;">
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="menu-item dropdown dropdown-submenu">
                  <a href="produse.php?categorie=interfoane" class="dropdown-toggle">
                    Interfoane
                    <span class="expand_caret caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href='produse.php?categorie2=interfoane_bloc'>Interfoane de blocuri</a></li>
                    <li><a href="produse.php?categorie2=interfoane_vila">Interfoane de vile</a></li>
                  </ul>
                </li>
                <li class="menu-item dropdown dropdown-submenu">
                  <a href="produse.php?categorie=video_interfoane" class="dropdown-toggle">
                    Videointerfoane
                    <span class="expand_caret caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href='produse.php?categorie2=video_interfoane_bloc'>Videointerfoane de blocuri</a></li>
                    <li><a href="produse.php?categorie2=video_interfoane_vila">Videointerfoane de vile</a></li>
                  </ul>
                </li>
                <li><a href="produse.php?categorie=supraveghere">Sisteme de supraveghere</a></li>
                <li><a href="produse.php?categorie=acces">Control acces</a></li>
                <li><a href="produse.php?categorie=antiefractie">Alarme antiefractie</a></li>
                <li><a href="produse.php?categorie=porti">Porti automate</a></li>
                <li><a href="produse.php?categorie=usi">Usi de garaj</a></li>
                <li><a href="produse.php?categorie=bariere">Bariere auto</a></li>
                <li><a href="produse.php?categorie=yale">Yale si accesorii usi</a></li>
              </ul>
            </div>
          </li>
          <li class="active"><a href="contact.html">Contact</a></li>
        </ul>

        <!-- <ul class="nav navbar-nav navbar-right" id="listLogin">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
      </div>
    </nav>

    <div class="" id="divBreakLine"></div>

    <div class="container w-100" id="divContent">

      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h3 style="margin-bottom: 30px"><b>FORMULAR CONTACT</b></h3>
          <form class="" action="contact.php" method="post">
            <div class="form-group">
              <label for="name">Nume (obligatoriu):</label>
              <input type="text" class="form-control" id="usr" placeholder="Numele complet" name="nume" required>
            </div>
            <div class="form-group">
              <label for="email">Adresa de email (obligatoriu):</label>
              <input type="email" class="form-control" id="email" placeholder="Adresa de email" name="email" required>
            </div>
            <div class="form-group">
              <label for="mesaj">Mesajul tau:</label>
              <textarea class="form-control" rows="5" id="mesaj" name="mesaj"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Trimite</button>
          </form>
          <div id="php-info">
            <?php
              if(isset($_POST['nume']) && isset($_POST['email']) && isset($_POST['mesaj'])) {
                $data = [];
                $data['nume'] = $_POST['nume'];
                $data['email'] = $_POST['email'];
                $data['mesaj'] = $_POST['mesaj'];

                $pdo = new PDO("mysql:host=localhost;dbname=egib;","root","");
                $sql = "INSERT INTO mesaje (nume, email, mesaj) VALUES (:nume, :email, :mesaj)";

                $stmt = $pdo->prepare($sql);
                $stmt->execute($data);

                echo '<p>Mesajul a fost trimis.</p>';
              }
            ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="" style="margin: 20px;">
            <h3 style="margin-bottom: 30px"><b>IMPORTANT</b></h3>
            <p class="" style="font-size: 24px;">
              Acesta este un loc de ridicare comenzi si nu un magazin sau showroom.
            </p>
            <p style="font-size: 16px;">
              Va rugam sa ne contactati inainte de orice vizita pentru a va confirma disponibilitatea produselor comandate.
            </p>
            <div class="" style="margin-top: 30px;">
              <i style="font-size: 30px; margin-right: 5px;" class="fas fa-phone"></i>
              <span style="font-size: 16px;">Tel: 0755.113.400 sau 0729.725.128</span>
            </div>
            <div class="" style="margin-top: 30px;">
              <a class="map-location" href="https://www.google.com/maps/place/Crangasi/@44.4530937,26.0437443,15.79z/data=!4m13!1m7!3m6!1s0x40b20191fc144bc9:0xe81b8c868625c30!2zQ3LDom5nYciZaSwgQnVjaGFyZXN0!3b1!8m2!3d44.4550016!4d26.0479129!3m4!1s0x40b20191dbf79545:0x41f5b95d9cf898de!8m2!3d44.4519126!4d26.0477686">
                <i style="font-size: 30px; margin-right: 5px;" class="fas fa-map-marked-alt"></i>
              </a>
              <span style="font-size: 16px;">Sectorul 6, Crangasi</span>
            </div>
          </div>
        </div>
        
      </div>

    </div>

    <div class="footer w-100" style="bottom: 0;">

    </div>


  </body>

</html>
