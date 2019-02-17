<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Handlekurv";
    include "../../elements/head.php";
   ?>
   <script async defer src="/HypeIT/scripts/cart.js"></script>
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
<p>Ting du handler i butikken vil havne under denne teksten...</p>
<!--
    <div class="cartProducts">
      <img src="../../images/SupremeCatInAHatBrightRoyal.jpg" alt="Produkt bilde">
      <div class="cartText">
        <div class="cartTextChild">
          <p id="cartProductName">Cat in the Hat Hettegenser</p>
          <p id="cartProductPrice">3000 kr</p>
        </div>
        <div class="cartProductAndPriceParent">
          <div class="tabel">
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
        </div>
        <div class="cartProductNumberDiv">
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
      <span class="KryssUt" onclick="deleteTing(0)">x</span>
    </div>


    <div class="cartProducts">
      <img src="../../images/SupremeCatInAHatBrightRoyal.jpg" alt="Produkt bilde">
      <div class="cartText">
        <div class="cartTextChild">
          <p id="cartProductName">Cat in the Hat Hettegenser</p>
          <p id="cartProductPrice">3000 kr</p>
        </div>
        <div class="cartProductAndPriceParent">
          <div class="tabel">
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
        </div>
        <div class="cartProductNumberDiv">
          <input type="text" name="navn" id="cartProductNumber" value="1">
        </div>
      </div>
      <span class="KryssUt" onclick="deleteTing(1)">x</span>
    </div>

    <div class="cartProducts" style="border: 0px solid white" id="Leave empty"></div>-->

  </div>


  <div class="cartConfirmation">
    <div>
      <p class="cartConfDiscountText">
        Legg til en rabattkode/friendkode*
      </p>
      <div class="cartConfDiscountRow">
        <input type="text" id="cartConfDiscountInput">
        <button type="sumbit" id="useDiscount">Bruk</button>
      </div>
      <a href="#"><p class="cartConfDiscountSmallText">*Les mer om friendkode her!</p></a>
    </div>
    <div class="cartPayment">
      <div class="cartPaymentChild">
        <table>
          <tbody>
        	  <tr>
              <td>Bestillingsverdi:</td>
              <td id="krPrefix" class="value">0</td>
            </tr>
            <tr>
              <td>Levering:</td>
              <td id="krPrefix" class="shipping">0</td>
            </tr>
            <tr>
              <td>Rabatt:</td>
              <td id="krPrefix" class="sale">0</td>
            </tr>
            <tr>
              <td class="Sum">Sum:</td>
              <td class="Sum" id="krPrefix">0</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="cartButtonCenter">
      <button id="videreTilKassenButton" type="button">Gå videre til kassen</button>
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
