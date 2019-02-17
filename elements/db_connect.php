<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "products";

$connection = new mysqli($host, $user, $password, $database);

if($connection->connect_error) {
  die("Noe gikk galt..." . $connection->connect_error);
}

$connection->set_charset("utf8");

$sql = "SELECT product_id, product_name, price FROM product WHERE product_id = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $price);
$stmt->fetch();
$stmt->close();

$url = "/HypeIT/images";
$imgsql = "SELECT url FROM product_images JOIN images ON images.image_id=product_images.image_id WHERE product_id=$id";
$result = $connection->query($imgsql);
$file = $result->fetch_assoc();



echo ("<div class='cartProducts'>
  <img src=" . "\"" . $url . $file['url'] . "\"" . "alt='Produkt bilde'>
  <div class='cartText'>
    <div class='cartTextChild'>
      <p id='cartProductName'>$name</p>
      <p class='cartProductPrice' id='krPrefix'>" . $price . "</p>
    </div>
    <div class='cartProductAndPriceParent'>
      <div class='tabel'>
        <!--<table>
          <tr>
            <td>Farge:</td>
            <td id='cartProductColor'>Mustard</td>
          </tr>
          <tr>
            <td>Størrelse:</td>
            <td id='cartProductSize'>L</td>
          </tr>
        </table>-->
      </div>
    </div>
    <div class='cartProductNumberDiv'>
      <input type='text' name='navn' id='cartProductNumber' value='1'>
    </div>
  </div>
  <span class='KryssUt'>x</span>
  <p style='display: none;' id='product_id' class='do_not_touch_this_thing_I_need_it'>$id</p>
</div>");

 ?>
