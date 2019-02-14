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
        <p class="cartProductName">Cat in the Hat Hettegenser</p>
        <p class="cartProductPrice">3000 kr</p>
        <p class="cartProductColor">Farge: Royal Blue<p>
        <p class="cartProductSize">Størrelse: Stor nok</p>
        <input type="text" name="navn" class="cartProductNumber" value="1">
      </div>
    </div>

    <div class="cartProducts">
      <img src="../../images/SupremeCatInAHatMustard.jpg" alt="Produkt bilde">
      <div class="cartText">
        <p class="cartProductName">Supreme Cat In a Hat </p>
        <p class="cartProductPrice">3000 kr</p>
        <p class="cartProductColor">Farge: Royal Blue</p>
        <p class="cartProductSize">Størrelse: Litt for liten</p>
        <input type="text" name="navn" class="cartProductNumber" value="1">
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
      <div class="cartPayment">
        <div class="cartPaymentChild">
          <p>Bestillingsverdi:</p>
          <p>Levering:</p>
          <p>Rabatt:</p>
          <br>
          <p>Sum</p>
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
