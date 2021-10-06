<?php
function searchForId($id, $array) {
 foreach ($array as $key => $val) {
     if ($val[0] === $id) {
         return $key;
     }
 }
 return null;
}

  session_start();
  if (isset($_POST['idProdus'])) {
    if (empty($_SESSION['ids'])) {
      $_SESSION['ids'] = array(
        array(
          $_POST['idProdus'],
          1
        )
      );
    } else {
      // echo $_POST['idProdus'];
      // echo searchForId($_POST['idProdus'],$_SESSION['ids']);
      if (searchForId($_POST['idProdus'],$_SESSION['ids'])) {
        // echo "1";
        // $_SESSION['ids'][array_search($_POST['idProdus'], $_SESSION['ids'])][1]++;
        $_SESSION['ids'][searchForId($_POST['idProdus'],$_SESSION['ids'])][1]++;
      } else {
        // echo "0";
        $_SESSION['ids'][sizeof($_SESSION['ids'])] = array($_POST['idProdus'],1);
      }
    }
  }
  // session_destroy();
?>

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

  <body class="">

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
      <div class="w-100 text-center pull-left" style="">
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
          <li class="active">
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
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <!-- <ul class="nav navbar-nav navbar-right" id="listLogin">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
      </div>
    </nav>

    <div class="" id="divBreakLine"></div>

    <div class="container w-100" id="divContent">

      <div class="" id="divProducts">
        <?php
          $categorii = array("interfoane","video_interfoane","supraveghere","acces","antiefractie","porti","usi","bariere","yale");
          $categorii2 = array("interfoane_bloc","interfoane_vila","video_interfoane_bloc","video_interfoane_vila");
          if (isset($_POST['search']) && $_POST['search']!='') {

            $pdo = new PDO("mysql:host=localhost;dbname=egib;","root","");
            $sql = "SELECT * FROM produse WHERE nume LIKE '%".$_POST['search']."%'";
            $data = $pdo->query($sql)->fetchAll();

            foreach ($data as $row) {
              echo '<div class="product col-xs-12 col-md-6">';
                echo '<div class="well div-product">';

                  echo '<div class="div-img-product">';
                    echo '<img class="img-product" src="imagini/produse/'.$row['img'].'" alt="">';
                  echo '</div>';

                  echo '<div class="div-details-product">';

                    echo '<div class="div-name-product">';
                      echo '<h3 class="">'.$row['nume'].'<h3>';
                    echo '</div>';

                    echo '<div class="div-pret-product">';
                      echo '<p>'.$row['pret'].' RON</p>';
                    echo '</div>';

                  echo '</div>';

                  echo '<div class="">';

                    echo '<form class="" action="produse.php" method="post">';
                      echo '<button class="btn btn-primary" type="submit" name="button">Adauga in cos</button>';
                      echo '<input type="hidden" name="idProdus" value="'.$row['id'].'">';
                    echo '</form>';

                  echo '</div>';

                echo '</div>';
              echo '</div>';
            }

          } else if (isset($_GET['categorie'])) {
            if (in_array($_GET['categorie'],$categorii)) {

              $pdo = new PDO("mysql:host=localhost;dbname=egib;","root","");
              $sql = "SELECT * FROM produse WHERE categorie='".$_GET['categorie']."'";
              $data = $pdo->query($sql)->fetchAll();

              foreach ($data as $row) {
                echo '<div class="product col-xs-12 col-md-6">';
                  echo '<div class="well div-product">';

                    echo '<div class="div-img-product">';
                      echo '<img class="img-product" src="imagini/produse/'.$row['img'].'" alt="">';
                    echo '</div>';

                    echo '<div class="div-details-product">';

                      echo '<div class="div-name-product">';
                        echo '<h3 class="text-info">'.$row['nume'].'<h3>';
                      echo '</div>';

                      echo '<div class="div-pret-product">';
                        echo '<p>'.$row['pret'].' RON</p>';
                      echo '</div>';

                    echo '</div>';

                    echo '<div class="">';

                      echo '<form class="" action="produse.php" method="post">';
                        echo '<button class="btn btn-primary" type="submit" name="button">Adauga in cos</button>';
                        echo '<input type="hidden" name="idProdus" value="'.$row['id'].'">';
                      echo '</form>';

                    echo '</div>';

                  echo '</div>';
                echo '</div>';
              }

            }
          } else if (isset($_GET['categorie2'])) {
            if (in_array($_GET['categorie2'],$categorii2)) {

              $pdo = new PDO("mysql:host=localhost;dbname=egib;","root","");
              $sql = "SELECT * FROM produse WHERE categorie2='".$_GET['categorie2']."'";
              $data = $pdo->query($sql)->fetchAll();

              foreach ($data as $row) {
                echo '<div class="product col-xs-12 col-md-6">';
                  echo '<div class="well div-product">';

                    echo '<div class="div-img-product">';
                      echo '<img class="img-product" src="imagini/produse/'.$row['img'].'" alt="">';
                    echo '</div>';

                    echo '<div class="div-details-product">';

                      echo '<div class="div-name-product">';
                        echo '<h3 class="text-info">'.$row['nume'].'<h3>';
                      echo '</div>';

                      echo '<div class="div-pret-product">';
                        echo '<p>'.$row['pret'].' RON</p>';
                      echo '</div>';

                    echo '</div>';

                    echo '<div class="">';

                      echo '<form class="" action="produse.php" method="post">';
                        echo '<button class="btn btn-primary" type="submit" name="button">Adauga in cos</button>';
                        echo '<input type="hidden" name="idProdus" value="'.$row['id'].'">';
                      echo '</form>';

                    echo '</div>';

                  echo '</div>';
                echo '</div>';
              }

            }
          } else {
            $pdo = new PDO("mysql:host=localhost;dbname=egib;","root","");
            $sql = "SELECT * FROM produse";
            $data = $pdo->query($sql)->fetchAll();

            foreach ($data as $row) {
              echo '<div class="product col-xs-12 col-md-6">';
                echo '<div class="well div-product">';

                  echo '<div class="div-img-product">';
                    echo '<img class="img-product" src="imagini/produse/'.$row['img'].'" alt="">';
                  echo '</div>';

                  echo '<div class="div-details-product">';

                    echo '<div class="div-name-product">';
                      echo '<h3 class="text-info">'.$row['nume'].'<h3>';
                    echo '</div>';

                    echo '<div class="div-pret-product">';
                      echo '<p>'.$row['pret'].' RON</p>';
                    echo '</div>';

                  echo '</div>';

                  echo '<div class="">';

                    echo '<form class="" action="produse.php" method="post">';
                      echo '<button class="btn btn-primary" type="submit" name="button">Adauga in cos</button>';
                      echo '<input type="hidden" name="idProdus" value="'.$row['id'].'">';
                    echo '</form>';

                  echo '</div>';

                echo '</div>';
              echo '</div>';
            }
          }
        ?>
      </div>



    </div>

  </body>

</html>
