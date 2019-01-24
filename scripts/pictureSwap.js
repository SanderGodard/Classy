var primary = document.getElementById('storBilde');

document.getElementById('img1').addEventListener("click", swapPic1);

function swapPic1() {
  primary.src = document.getElementById('img1').src;
  console.log("Pressed img1");
}

document.getElementById('img2').addEventListener("click", swapPic2);

function swapPic2() {
  primary.src = document.getElementById('img2').src;
  console.log("Pressed img2");
}

document.getElementById('img3').addEventListener("click", swapPic3);

function swapPic3() {
  primary.src = document.getElementById('img3').src;
  console.log("Pressed img3");
}

console.log("Hello");
