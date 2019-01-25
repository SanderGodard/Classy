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
      <div class="smaBilder">
        <img src="../../../images/racks.jpg" alt="Rack" id="img1">
        <img src="../../../images/gul.jpg" alt="Green" id="img2">
        <img src="../../../images/grønn.jpg" alt="Mustard" id="img3">
      </div>
    </div>
  </div>

  <div class="hoyreside">
    <h2><a class="Supreme">Cat In The Hat Hettegenser</a></h2>

    <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>

    <h2><a> 3000,-</a></h2>



</div>

  </main>
  <footer>
    <?php
      include "../../../elements/footer.php";
     ?>
  </footer>
</body>
</html>
