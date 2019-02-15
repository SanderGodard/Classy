
if(document.getElementById('storBilde') != null) {

  zoomImg = document.getElementById('storBilde');

  bigImg = document.createElement('img');
  bigImg.src = zoomImg.src;

  var style = bigImg.style;

  style.position = "absolute";
  style.zIndex = "900000000";
  style.height = "80%";
  //style.width = "40%";
  style.top = "10%";
  style.bottom = "10%";
  style.left = "30%";
  style.right = "30%";
  style.border = "1px solid black";
  style.borderRadius = "5px";

  var blurDiv = document.createElement('div');
  blurDiv.style.position = "fixed";
  blurDiv.style.height = "100vh";
  blurDiv.style.width = "100wh";
  blurDiv.style.top = "0";
  blurDiv.style.bottom = "0";
  blurDiv.style.background = "rgba(0,0,0,1)";

  zoomImg.addEventListener("click", zoom);
}


function zoom() {
  bigImg.src = zoomImg.src;
  //document.body.style.filter = "blur(2px)";
  document.body.appendChild(bigImg);
  document.body.appendChild(blurDiv);
  document.addEventListener("click", unZoom, event);
  console.log("hello");
}

function unZoom(x) {
  if(x.target != document.getElementById('storBilde')) {
    document.body.removeChild(bigImg);
    document.body.removeChild(blurDiv);
    document.body.style.filter = "";
    document.removeEventListener("click", unZoom);
  }

}
