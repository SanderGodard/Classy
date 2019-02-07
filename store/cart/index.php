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
      <div class="center">
        <a href="#">
          <img src="../../images/SupremeCatInAHatBrightRoyal.jpg" alt="Produkt bilde">
        </a>
        <div class="cartText">
          <div>
            <p id="cartProductName">Cat in the Hat Hettegenser</p>
            <p id="cartProductPrice">3000</p>
          </div>
          <div>
            <table>
              <tr>
                <td>Farge:</td>
                <td id="cartProductColor">Mustard</td>
              </tr>
              <tr>
                <td>Størrelse:</td>
                <td id="cartProductSize">L</td>
              </tr>
            </table>
          </div>
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
    </div>


    <div class="cartProducts">
      <div class="center">
        <a href="#">
          <img src="../../images/SupremeCatInAHatMustard.jpg" alt="Produkt bilde">
        </a>
        <div class="cartText">
          <div>
            <p id="cartProductName">Supreme Cat In a Hat </p>
            <p id="cartProductPrice">3000</p>
          </div>
          <div>
            <table>
              <tr>
                <td>Farge:</td>
                <td id="cartProductColor">Mustard</td>
              </tr>
              <tr>
                <td>Størrelse:</td>
                <td id="cartProductSize">L</td>
              </tr>
            </table>
          </div>
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
    </div>
  </div>


  <div class="cartConfirmation">
    <p class="cartConfDiscountText">
      Legg til en rabattkode/friendkode*
    </p>
    <div class="cartConfDiscountRow">
      <input type="text" id="cartConfDiscountInput">
      <button type="sumbit">Bruk</button>
    </div>
    <a href="#"><p class="cartConfDiscountSmallText">*Les mer om friendkode her!</p></a>
    <div class="cartPayment">
      <div class="cartPaymentChild">
        <br><br>
        <table>
          <tr>
            <td>Bestillingsverdi:</td>
            <td id="krPrefix">20</td>
          </tr>
          <tr>
            <td>Levering:</td>
            <td id="krPrefix">0</td>
          </tr>
          <tr>
            <td>Rabatt:</td>
            <td id="krPrefix">5</td>
          </tr>
          <tr>
            <td class="Sum">Sum:</td>
            <td class="Sum" id="krPrefix">15</td>
          </tr>
        </table>
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
