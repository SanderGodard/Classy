<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT - Hjem";
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

<?php
    if(isset($_GET["b"])){
        $brand = $_GET["b"];
      }
      else {
          die("Udefinert brand...");
      }
 ?>
 <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "products";

    $connection = new mysqli($host, $user, $password, $db);

    $sql = "SELECT * FROM product WHERE brand='$brand'";
    $url = "/HypeIT/images";
    
    
    $result = $connection->query($sql);
    ?>
    <div class="browseWrapper">
    <?php
    
    while($row = $result->fetch_assoc()) {
        $imgsql = "SELECT url FROM product_images JOIN images ON images.image_id=product_images.image_id WHERE product_id=$row[product_id]";
        $imgquery = $connection->query($imgsql);
        $array = $imgquery->fetch_assoc();
        echo "<a href='/HypeIT/produkter/menn/gensere/?p=" . $row['product_id'] . "' class='browseLink'>
                <div class='browseBox'>
                <img src=" . "\"" . $url . "$array[url]" . "\"" . " alt='Royal'>
                    <div class='browseInfo'>
                        <div class='browseText'>" . $row['product_name'] . "</div>
                        <div class='browsePrice' id='krPrefix'>" . $row['price'] . ",-" . "</div>
                    </div>
                </div>
              </a>";
    }

  ?>
    </div>




  </main>
  <footer>
    <?php
      include "../../../elements/footer.php";
     ?>
  </footer>
</body>
</html>