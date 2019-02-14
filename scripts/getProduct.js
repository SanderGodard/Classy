function getProduct(str) {
  var xhttp;
  if (str == "") {
    //document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.body.innerHTML += this.responseText;
      return;
    }
  };
  xhttp.open("GET", "/HypeIT/elements/db_connect.php?q="+str, true);
  xhttp.send();
}

function getVars() {
  var name = "<?php echo $name ?>";
  var brand = "<?php echo $brand ?>";
  var price = "<?php echo $price ?>";

  console.log(name);
  console.log(brand);
  console.log(price);
}
