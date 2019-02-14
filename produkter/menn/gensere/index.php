<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT - Hjem";
    include "../elements/head.php";
   ?>
</head>
<body>
  <nav>
    <?php
      include "../elements/nav.php";
     ?>
  </nav>
  <main>


<!--
  Write code here
-->

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
      include "../elements/footer.php";
     ?>
  </footer>
</body>
</html>
