if(localStorage.getItem("cart") != undefined && localStorage.getItem("cart") != null && localStorage.getItem("cart") != "[]") {
  cart = JSON.parse(localStorage.getItem("cart"));
}
p=0;
if(cart != undefined){
  for(i=0; i<cart.length; i++) {
    getProduct(parseInt(cart[i]));
    p++;
  }
}

setTimeout(sumItems, 200);

document.getElementsByClassName('cartMainProducts')[0].addEventListener("click", cartRemoveItem, event);

function cartRemoveItem(x) {
  xBtn = document.getElementsByClassName('KryssUt');
  for(i=0; i<xBtn.length; i++) {
    if(x.target == xBtn[i]) {
      deleteId = document.getElementsByClassName('do_not_touch_this_thing_I_need_it')[i].innerHTML;
      console.log(deleteId);
      xBtn[i].parentNode.parentNode.removeChild(xBtn[i].parentNode);
      index = cart.indexOf(deleteId);
      //console.log(cart);
      cart.splice(index, 1);
      //console.log(cart);
      localStorage.setItem("cart", JSON.stringify(cart));
      sumItems();
    }
  }
}
codeSubmit = document.getElementById('useDiscount');
codeSubmit.addEventListener("click", discountCode);
function discountCode() {
  discountCodes = ["HypeIT", "BigOof", "FredrikGlemmestad", "MobbeOffer", "Rabattkode", "BackendErDenBesteGruppa"];
  codeField = document.getElementById('cartConfDiscountInput');
  discountField = document.getElementsByClassName('sale')[0];

  code = codeField.value;
  //console.log(code);
  codeNum = discountCodes.indexOf(code);
  switch (codeNum) {
    case 0:
    discountField.innerHTML = 100;
    break;

    case 1:
    discountField.innerHTML = 1000;
    break;

    case 2:
    discountField.innerHTML = 20000;
    break;

    case 3:
    discountField.innerHTML = 10;
    break;

    case 4:
    discountField.innerHTML = 30000;
    break;

    case 5:
    discountField.innerHTML = 1000000;
    break;

    default:
    discountField.innerHTML = -100;
  }
  sumItems();

}

function sumItems() {
  prices = document.getElementsByClassName('cartProductPrice');

  sum = 0;
//calculating sum of items
  for(i=0; i<prices.length; i++) {
    sum += parseFloat(prices[i].innerHTML);
  }
  //console.log(sum);
  document.getElementsByClassName('value')[0].innerHTML = sum;

  shipping = document.getElementsByClassName('shipping')[0];
//Calculating shipping
  if(cart.length > 20) {
    shipping.innerHTML = 260;
  }
  else if (cart.length > 10) {
    shipping.innerHTML = 100;
  }
  else if (cart.length > 5) {
    shipping.innerHTML = 60;
  }
  else if (cart.length > 0) {
    shipping.innerHTML = 50;
  }
  else if (cart.length == 0) {
    shipping.innerHTML = 0;
  }

//Summing everything

totalSum = document.getElementsByClassName('Sum')[1];

total = 0;
total += sum;
total += parseInt(shipping.innerHTML);
total -= parseInt(document.getElementsByClassName('sale')[0].innerHTML);

totalSum.innerHTML = total;

}
