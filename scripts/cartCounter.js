counter = document.getElementById('cartCounter');
lStorage = localStorage;

if(lStorage.getItem("counted") != undefined) {
  countedItems = lStorage.getItem("counted");
  countedItems = parseInt(countedItems, 10);
  counter.innerHTML = countedItems;
}
else {
  countedItems = counter.innerHTML;
  countedItems = parseInt(countedItems, 10);
  counter.innerHTML = countedItems;
}



interval = setInterval(changeCounter, 100);
function changeCounter() {
  if(counter.innerHTML == 0) {
    counter.style.display = "none";
  }
  else {
    counter.style.display = "inline-block";
  }
}

function cartCounter(x) {
  if(lStorage.getItem("counted") != undefined) {
    countedItems = lStorage.getItem("counted");
  }
  else {
    countedItems = counter.innerHTML;
  }

  countedItems = parseInt(countedItems, 10);
  countedItems++;
  counter.innerHTML = countedItems;
  lStorage.setItem("counted", countedItems);
}
