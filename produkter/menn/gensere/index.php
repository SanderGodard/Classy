<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Produkter - Menn - Gensere";
    include "../../../elements/head.php";
   ?>
</head>
<body>
  <?php
  if(isset($_GET["p"])){
    $item_id = $_GET["p"];
  }
  else{
    die("Udefinert produkt...");
  }
   ?>
  <?php
  $host = "127.0.0.1";
  $user = "root";
  $password = "";
  $database = "products";

  $connection = new mysqli($host, $user, $password, $database);

  if($connection->connect_error) {
    die("Noe gikk galt..." . $connection->connect_error);
  }

  $connection->set_charset("utf8");

  $sql = "SELECT product_name, brand, price FROM product WHERE product_id=$item_id";
  $imgsql = "SELECT url FROM product_images JOIN images ON images.image_id=product_images.image_id WHERE product_id=$item_id";

  $result = $connection->query($sql);
  $array = $result->fetch_assoc();
  $url = "/HypeIT/images";
   ?>
  <nav>
    <?php
      include "../../../elements/nav.php";
     ?>
  </nav>
  <main>
    <?php
    $images = $connection->query($imgsql);
    $imgs = $images->fetch_assoc();
    $i = 1;
     ?>
    <div class="produktside">

      <div class="venstreside">
        <div class="Bilder">
          <img src="<?php echo($url . $imgs['url']) ?>" class="StortBilde" id="storBilde">
          <div class="smaBilder" id="Gliscor">
            <a class="Material" id="arrowPrev">keyboard_arrow_left</a>
            <?php
              $images = $connection->query($imgsql);
              while($stuff = $images->fetch_assoc()) {
                echo("<img src=" . "\"" . $url . $stuff['url'] . "\"" . " alt='I do not get paid enough to code this...' id=img" . $i . ">");
                $i = $i+1;
              }
             ?>
             <a class="Material" id="arrowNext">keyboard_arrow_right</a>

          </div>
        </div>
      </div>

      <div class="hoyreside">
        <h2><a class="<?php echo($array['brand']); $result = $connection->query($sql); ?>"><?php while ($rad = $result->fetch_assoc()){
                                      echo("$rad[product_name]"); }?></a></h2>
                                      <?php $result = $connection->query($sql); ?>
        <h2><a class="pris"> <?php while ($rad = $result->fetch_assoc()){
                                      echo("$rad[price]" . ",-"); }?></a></h2>
        <div class="str">
          <a>S</a>
          <a>M</a>
          <a>L</a>
          <a>XL</a>
        </div>
        <div class="farge">
          <a id="farge1"><i class="Material">check</i></a>
          <a id="farge2"><i class="Material">check</i></a>
          <a id="farge3"><i class="Material">check</i></a>
          <a id="farge4"><i class="Material">check</i></a>
          <a id="farge5"><i class="Material">check</i></a>
          <a id="farge6"><i class="Material">check</i></a>
        </div>

        <a href="javascript:void(0)" class="shopBtn" tabindex="2" onclick="addToBasket(this);cartCounter(this);" id="frontBtn">Legg i handlekurv</a>

      </div>
    </div>


    <!-- Eline koder under her -->

    <div class="anbefalte">
      <h1>Andre har også kjøpt</h1>
      <div class="anbefaltwrapper">
        <a href="#"><div class="anbefaltbox">
          <img src="../../../images/t-skjorte.png" alt="Royal">
        <div class="anbefaltinfo">
          <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
          <div class="anbefaltpris"> 3000,- </div>
        </div>
       </div>
      </a>
        <a href="#"><div class="anbefaltbox">
          <img src="../../../images/t-skjorte.png" alt="Royal">
        <div class="anbefaltinfo">
          <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
          <div class="anbefaltpris"> 3000,- </div>
        </div>
        </div>
        </a>
        <a href="#"> <div class="anbefaltbox">
          <img src="../../../images/t-skjorte.png" alt="Royal">
        <div class="anbefaltinfo">
          <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
          <div class="anbefaltpris"> 3000,- </div>
        </div>
        </div>
        </a>
        <a href="#"><div class="anbefaltbox">
          <img src="../../../images/t-skjorte.png" alt="Royal">
        <div class="anbefaltinfo">
          <div class="anbefalttext"> Cat in the Hat Hettegenser </div>
          <div class="anbefaltpris"> 3000,- </div>
        </div>
        </div>
      </a>
      </div>

    </div>

  </main>
  <footer>
    <?php
      include "../../../elements/footer.php";
     ?>
  </footer>
  <script>
    /* Initiate Magnify Function
    with the id of the image, and the strength of the magnifier glass:*/
    //magnify("storBilde", 2);
  </script>
</body>
</html>
