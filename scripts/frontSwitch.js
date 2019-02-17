if(document.getElementById('frontImg') != null) {

  var img = document.getElementById('frontImg');
  var text = document.getElementById('frontInfo').children[0];
  var header = document.getElementById('frontInfo');
  var btn = document.getElementsByClassName('shopBtn')[0];
  var oTxt = text.innerHTML;
  var oSrc = img.src;
  var oHref = btn.href;
  var nHref = "/HypeIT/produkter/menn/gensere/?p=50";

  img.style.transition = "all 0.7s";
  text.style.transition = "all 0.7s";
  btn.style.transition = "all 0.7s";
  header.style.transition = "all 0.7s";

  nTxt = "Stone Island LOOM WOVEN DOWN";
  nSrc = "/HypeIT/images/stoneisland.png";

  interval = setInterval(animation, 11000);

}

function animation() {
  img.style.opacity = 0;
  text.style.opacity = 0;
  btn.style.opacity = 0;
  header.style.opacity = 0;
  setTimeout(changeContent, 1000);


}

function changeContent() {
  if(img.src == oSrc) {
    img.src = nSrc;
    text.innerHTML = nTxt;
    btn.href = nHref;
  }
  else{
    img.src = oSrc;
    text.innerHTML = oTxt;
    btn.href = oHref;
  }
  setTimeout(opacity1, 200);

}

function opacity1() {
  img.style.opacity = 1;
  text.style.opacity = 1;
  btn.style.opacity = 1;
  header.style.opacity = 1;
}
