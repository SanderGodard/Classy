<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT - Hjem";
    include "../../elements/head.php";
   ?>
</head>
<body>
  <?php
  if(isset($_GET["p"])){
    $item_id = $_GET["p"];
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

  $result = $connection->query($sql);

   ?>
  <nav>
    <?php
      include "../../elements/nav.php";
     ?>
  </nav>
  <main>

    <div class="produktside">

      <div class="venstreside">
        <div class="Bilder">
          <img src="../../../images/racks.jpg" class="StortBilde" id="storBilde">
          <div class="smaBilder" id="Gliscor">
            <img src="../../../images/racks.jpg" alt="Rack" id="img1">
            <img src="../../../images/gul.jpg" alt="Green" id="img2">
            <img src="../../../images/grønn.jpg" alt="Mustard" id="img3">
          </div>
        </div>
      </div>

      <div class="hoyreside">
        <h2><a class="Supreme"><?php while ($rad = $result->fetch_assoc()){
                                      echo("$rad[product_name]"); }?></a></h2>
        <h2><a class="pris"> <?php while ($rad = $result->fetch_assoc()){
                                      echo("$rad[price]"); }?></a></h2>
        <div class="str">
          <a>S</a>
          <a>M</a>
          <a>L</a>
          <a>XL</a>
        </div>
        <div class="farge">
          <a id="farge1"></a>
          <a id="farge2"></a>
          <a id="farge3"></a>
          <a id="farge4"></a>
          <a id="farge5"></a>
          <a id="farge6"></a>
        </div>

        <a href="javascript:void(0)" class="shopBtn" tabindex="2" onclick="addToBasket(this);cartCounter(this);" id="frontBtn">Legg i handlekurv</a>

      </div>
  </a>


<!--
  Write code here
-->


</div>
  </main>
  <footer>
    <?php
      include "../../elements/footer.php";
     ?>
  </footer>
</body>
</html>
