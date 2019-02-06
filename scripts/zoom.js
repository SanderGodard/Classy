
if(document.getElementById('storBilde') != null) {

  zoomImg = document.getElementById('storBilde');

  bigImg = document.createElement('img');
  bigImg.src = zoomImg.src;

  var style = bigImg.style;

  style.position = "absolute";
  style.zIndex = "900000000";
  style.height = "80%";
  //style.width = "30%";
  style.top = "10%";
  style.bottom = "10%";
  style.left = "25%";
  style.right = "25%";
  style.border = "1px solid black";
  style.borderRadius = "5px";

  zoomImg.addEventListener("click", zoom);
}


function zoom() {
  bigImg.src = zoomImg.src;
  document.body.appendChild(bigImg);
  document.addEventListener("click", unZoom, event);
  console.log("hello");
}

function unZoom(x) {
  if(x.target != document.getElementById('storBilde')) {
    document.body.removeChild(bigImg);
    document.removeEventListener("click", unZoom);
  }

}
