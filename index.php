<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT | Hjem";
    include 'elements/head.php';
   ?>
</head>
<body id="body">
  <nav>
    <?php
      include "elements/nav.php";
     ?>
  </nav>
  <main>


    <div class="Showcase">
      <img src="/HypeIT/images/showcase.png" alt="Supreme Dog Taped Seam Jakke" class="New" onclick="window.location.href='#'">
      <div class="Info">
        <h1 class="New product">Supreme dog taped seam jakke</h1>
        <a href="#" class="shopBtn" tabindex="2" onclick="addToBasket(this);">Legg i handlekurv</a>
      </div>
    </div>


  </main>
  <footer>
    <?php
      //include "elements/footer.php";
     ?>
  </footer>
</body>
</html>
