<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Produkter - Menn - Gensere";
    include "../../../elements/head.php";
   ?>
</head>
<body>
  <nav>
    <?php
      include "../../../elements/nav.php";
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
    <h2><a class="Supreme">Cat In The Hat Hettegenser</a></h2>

    <h2><a class="pris"> 3000,-</a></h2>

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



  </main>
  <footer>
    <?php
      //include "../../../elements/footer.php";
     ?>
  </footer>
  <script>
    /* Initiate Magnify Function
    with the id of the image, and the strength of the magnifier glass:*/
    //magnify("storBilde", 2);
  </script>
</body>
</html>
