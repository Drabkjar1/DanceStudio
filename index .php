<?php

require "stranky.php";

if(array_key_exists("stranka", $_GET)){
  $stranka=$_GET["stranka"];

  //kontrola zdali zadana stranka existuje
  if(array_key_exists($stranka,$seznamStranek)==false){
//stranka neexistuje
$stranka = "404";
// odeslat informaci vyhledavači
http_response_code(404);
  }

}else{
  $stranka ="uvod";
}
?>
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/section.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <title><?php  echo $seznamStranek[$stranka]->titulek ?></title>
  </head>
  <body>
    <header>
      <menu>
        <div class="container">
          <a href="./" class="logo">
            <img src="images/logo.png" alt="Logo" width="142" height="80"
          /></a>
          <nav>
            <ul>
              <?php
              foreach ($seznamStranek as $idStranky => $instanceStranky){
                if ($instanceStranky->menu !=""){
                echo "<li><a href='?stranka=$instanceStranky->id'>$instanceStranky->menu</a></li>";
              }}
              ?>
            </ul>
          </nav>
        </div>
      </menu>

      <div class="nadpis">
        <h2>Dance perfect</h2>
        <h3>Dance studio</h3>
        <div class="social">
          <a
            href="https://www.facebook.com/groups/dancedancedancecapetown"
            target="_blank"
            ><i class="fa-brands fa-facebook"></i
          ></a>
          <a href="https://www.facebook.com/dance" target="_blank"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://www.youtube.com/watch?v=Dhi_Wpj8J4c" target="_blank"
            ><i class="fa-brands fa-youtube"></i
          ></a>
        </div>
      </div>
    </header>

    <section>
      <?php
      echo file_get_contents("$stranka.html");
      ?>
    </section>

    <footer>
      <div class="container">
        <nav>
          <h3>Menu</h3>
          <ul>
          <?php
              foreach ($seznamStranek as $idStranky => $instanceStranky){
                if ($instanceStranky->menu != ""){
                echo "<li><a href='$instanceStranky->id'>$instanceStranky->menu</a></li>";
              }}
              ?>
          </ul>
        </nav>

        <div class="kontakt">
          <h3>Kontakt</h3>
          <address>
            <a
              href="https://mapy.cz/zakladni?x=-32.9530378&y=44.9315776&z=8"
              target="_blank"
              >Dance Perfect <br />Taneční 1 <br />Baleťákov, 111 11</a
            >
          </address>
        </div>

        <div class="otevreno">
          <h3>Otevřeno</h3>
          <table>
            <tr>
              <th>Po-Pá:</th>
              <td>8h-20h</td>
            </tr>
            <tr>
              <th>So:</th>
              <td>10h-22h</td>
            </tr>
            <tr>
              <th>Ne:</th>
              <td>12h-22h</td>
            </tr>
          </table>
        </div>
      </div>
    </footer>
  </body>
</html>
