function deleteTing(boyyy) {
  x = document.getElementsByClassName('cartProducts')[boyyy];
  x.style.display = "none";

  counter = document.getElementById('cartCounter').innerHTML;
  nr = parseInt(counter);

  newCount = nr - 1;
  counter = newCount;
}
