basket = [];
storedArray = [];
storedArray2 = [];
lStorage = sessionStorage;

function addToBasket(x) {
  p=0;
  storedArray = [];
  storedArray2= [];

  if(lStorage.getItem("basket") != undefined) {
    stored = lStorage.getItem("basket");
    for(i=0; i<stored.length; i++) {
      storedArray[i] = stored[i];
    }
    for(i=0; i<storedArray.length; i++) {
      switch (storedArray[i]) {
          case ",":
          p++;
          storedArray.splice(i,0);
          break;

          default:
          if(storedArray2[p] == undefined) {
            storedArray2[p] = storedArray[i]
          }
          else {
            storedArray2[p] += storedArray[i]
          }

      }
    }
  }
  console.log(storedArray2);
  //basket = lStorage.getItem("basket");
  value = x.previousElementSibling.innerHTML.toUpperCase();
  console.log(value);
  basket.push(value);
  lStorage.setItem("basket", basket);
  console.log(lStorage.getItem("basket"));
  alertBox();
}

function alertBox() {
  document.getElementById('alertBox').style.display = "block";
  setTimeout(hideBox, 2000);

}
function hideBox() {
  document.getElementById('alertBox').style.display = "none";
}
