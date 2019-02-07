<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Handlekurv";
    include "../../elements/head.php";
   ?>
</head>
<body>
  <nav>
    <?php
      include "../../elements/nav.php";
     ?>
  </nav>
  <main>


<div class="cartBigDiv">
  <div class="cartMainProducts">
    <div class="cartProducts">
      <img src="../../images/SupremeCatInAHatBrightRoyal.jpg" alt="Produkt bilde">
      <div class="cartText">
        <p id="cartProductName">Cat in the Hat Hettegenser</p>
        <p id="cartProductPrice">3000 kr</p>
        <div class="cartProductAndPriceParent">
          <div class="cartProductAndPrice">
            <p id="cartProductColor">Farge:</p>
            <p id="cartProductSize">Størrelse:</p>
          </div>
          <div class="cartProductAndPrice2">
            <p id="cartProductColor2">Blå</p>
            <p id="cartProductSize2">L</p>
          </div>
        </div>
        <div class="cartProductNumberDiv">
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
    </div>

    <div class="cartProducts">
      <img src="../../images/SupremeCatInAHatBrightRoyal.jpg" alt="Produkt bilde">
      <div class="cartText">
        <p id="cartProductName">Cat in the Hat Hettegenser</p>
        <p id="cartProductPrice">3000 kr</p>
        <div class="cartProductAndPriceParent">
          <div class="cartProductAndPrice">
            <p id="cartProductColor">Farge:</p>
            <p id="cartProductSize">Størrelse:</p>
          </div>
          <div class="cartProductAndPrice2">
            <p id="cartProductColor2">Blå</p>
            <p id="cartProductSize2">L</p>
          </div>
        </div>
        <div class="cartProductNumberDiv">
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
    </div>


  </div>

  <div class="cartConfirmation">
    <div class="cartConfDiscount">
      <p class="cartConfDiscountText">Legg til en rabattkode/friendkode*</p>
      <div class="cartConfDiscountRow">
        <input type="text" name="navn" id="cartConfDiscountInput">
        <button type="button">Bruk</button>
      </div>
      <a href="#"><p class="cartConfDiscountSmallText">*Les mer om friendkode her!</p></a>
      <div class="cartPaymentCenter">
        <div class="cartPayment">
          <div class="cartPaymentChild">
            <p>Bestillingsverdi:</p>
            <p>Levering:</p>
            <p>Rabatt:</p>
            <br>
            <p>Sum</p>
          </div>
          <div class="cartPaymentChild2">
            <p>1000kr</p>
            <p>1000kr</p>
            <p>1000kr</p>
            <br>
            <p>20000,95kr</p>
          </div>
        </div>
        <div class="cartButtonCenter">
          <button id="videreTilKassenButton" type="button">Gå videre til kassen</button>
        </div>
      </div>
    </div>
  </div>
</div>



  </main>
  <footer>
    <?php
      include "../../elements/footer.php";
     ?>
  </footer>
</body>
</html>
