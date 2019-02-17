function getProduct(str) {
  var xhttp;
  if (str == "") {
    //document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementsByClassName('cartMainProducts')[0].innerHTML += this.responseText;
    }
  };
  xhttp.open("GET", "/HypeIT/elements/db_connect.php?q="+str, true);
  xhttp.send();
};
