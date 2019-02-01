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
  if(countedItems>100) {
    counter.style.height = "1.9em";
    counter.style.width = "1.9em";
    counter.style.padding = "0.34em 0em";
    if(countedItems>100) {
      counter.style.height = "2em";
      counter.style.width = "2em";
      counter.style.padding = "0.4em 0em";
      createEasterEgg();
    }
  }
  counter.innerHTML = countedItems;
  lStorage.setItem("counted", countedItems);
}

function createEasterEgg() {
  var exit = document.createElement("div");
  var exitText = document.createTextNode("x");
  exit.appendChild(exitText);
  exit.style.position = "absolute";
  exit.style.top = "1%";
  exit.style.right = "3%";
  exit.style.cursor = "pointer";

  var logo = document.createElement("img");
  logo.src = "/HypeIT/images/logo.png";
  logo.alt = "HypeIT logo";
  logo.style.position = "absolute";
  logo.style.bottom = "6%";
  logo.style.right = "3%";
  logo.style.width = "20%";

  var blurDiv = document.createElement("div");
  blurDiv.style.width = "100vw";
  blurDiv.style.height = "100vh";
  blurDiv.style.background = "rgba(0,0,0,0.3)";
  blurDiv.style.position = "fixed";
  blurDiv.style.zIndex = "9999999999999999998";
  blurDiv.style.top = "0";
  blurDiv.style.left = "0";

  document.getElementsByTagName("nav")[0].style.filter = "blur(2px)";
  document.getElementsByTagName("main")[0].style.filter = "blur(2px)";
  document.getElementsByTagName("footer")[0].style.filter = "blur(2px)";

  document.body.appendChild(blurDiv);

  var easterEgg = document.createElement("div");
  var t = document.createTextNode("You definitely do not have enough money to purchase this many items..." + " We know you are just trying to flex..." + " We won't stop you from buying the stuff, but this is an official warning that we aren't responsible if you get into MASSIVE credit-card debt...");
  easterEgg.appendChild(t);
  easterEgg.appendChild(logo);
  easterEgg.appendChild(document.createElement("br"));
  easterEgg.appendChild(document.createTextNode("Best regards the HypeIT team"));
  easterEgg.appendChild(exit);
  exit.addEventListener("click", function() {
    easterEgg.style.display = "none";
    document.getElementsByTagName("nav")[0].style.filter = "blur(0)";
    document.getElementsByTagName("main")[0].style.filter = "blur(0)";
    document.getElementsByTagName("footer")[0].style.filter = "blur(0)";
    blurDiv.style.display = "none";
  });

  var style = easterEgg.style;
  style.fontFamily = "Calibri";
  style.textShadow = "1px 1px 1px rgba(0,0,0,0.3)";
  style.width = "40%";
  style.height = "40%";
  style.borderRadius = "2vw";
  style.background = "white";
  style.boxShadow = "1vh 1vh 2vw rgba(0,0,0,0.4)";
  style.position = "fixed";
  style.top = "30%";
  style.bottom = "30%";
  style.left = "30%";
  style.right = "30%";
  style.zIndex = "9999999999999999999";
  style.display = "flex";
  style.alignItems = "center";
  style.justifyContent = "center";
  style.flexDirection = "column";
  style.padding = "2vh";
  style.filter = "initial";
  document.body.appendChild(easterEgg);
}

//createEasterEgg();
