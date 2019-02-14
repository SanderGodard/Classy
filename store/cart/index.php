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
    </div>
  </div>


  <div class="cartConfirmation">
    <div>
      <p class="cartConfDiscountText">
        Legg til en rabattkode/friendkode*
      </p>
      <div class="cartConfDiscountRow">
        <input type="text" id="cartConfDiscountInput">
        <button type="sumbit">Bruk</button>
      </div>
      <a href="#"><p class="cartConfDiscountSmallText">*Les mer om friendkode her!</p></a>
    </div>
    <div class="cartPayment">
      <div class="cartPaymentChild">
        <table>
          <tbody>
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
