var img = document.getElementById('storBilde');

var bigImg = document.createElement('img');
bigImg.src = img.src;

var style = bigImg.style;

style.position = "fixed";
style.height = "30%";
style.width = "30%";
style.top = "35%";
style.bottom = "35%";
style.left = "35%";
style.right = "35%";

img.addEventListener("click", zoom);
document.addEventListener("click", zoom, event);

function zoom() {
  document.body.appendChild(bigImg);
  document.addEventListener("click", zoom, event);
}
