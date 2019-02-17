document.getElementById('frontBtn').addEventListener("click", addToCart);
  cart = [];
  if(localStorage.getItem("cart") != undefined && localStorage.getItem("cart") != null && localStorage.getItem("cart") != "[]") {
    cart = JSON.parse(localStorage.getItem("cart"));
  }
function addToCart() {
  p_id = window.location.search;
  p_id = p_id.replace("?p=", "");
  //console.log(p_id);
  if(localStorage.getItem("cart") != undefined && localStorage.getItem("cart") != null && localStorage.getItem("cart") != "[]") {
    cart = JSON.parse(localStorage.getItem("cart"));
  }
  cart.push(p_id);
  localStorage.setItem("cart", JSON.stringify(cart));
}

function emptyCart() {
  localStorage.setItem("cart", "[]");
}
//console.log(cart);
