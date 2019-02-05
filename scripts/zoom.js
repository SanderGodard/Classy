var zoomImg = document.getElementById('storBilde');

var bigImg = document.createElement('img');
bigImg.src = img.src;
bigImg.id = "bigImg";

var style = bigImg.style;

style.position = "fixed";
style.height = "100%";
//style.width = "30%";
style.top = "0";
style.bottom = "0";
style.left = "20%";
style.right = "20%";

zoomImg.addEventListener("click", zoom);


function zoom() {
  document.body.appendChild(bigImg);
  document.addEventListener("click", unZoom, event);
  console.log("hello");
}

function unZoom(x) {
  if(x.target != document.getElementById('bigImg')) {
    bigImg.parentNode.removeChild(document.getElementById('bigImg'));
    document.removeEventListener("click", unZoom);
  }

}
