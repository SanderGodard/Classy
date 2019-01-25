img = document.getElementById('frontImg');
text = document.getElementById('frontInfo');
oTxt = text.innerHTML;
oSrc = img.src;
img.style.transition = "all 0.6s";
text.style.transition = "all 0.6s";
btn = document.getElementById('frontBtn');
btn.style.transition = "all 0.6s";

nTxt = "Stone Island LOOM WOVEN DOWN";
nSrc = "/HypeIT/images/stoneisland.png";

interval = setInterval(animation, 13000);

function animation() {
  img.style.opacity = 0;
  text.style.opacity = 0;
  btn.style.opacity = 0;
  setTimeout(changeContent, 1000);


}

function changeContent() {
  if(img.src == oSrc) {
    img.src = nSrc;
    text.innerHTML = nTxt;
  }
  else{
    img.src = oSrc;
    text.innerHTML = oTxt;
  }
  img.style.opacity = 1;
  text.style.opacity = 1;
  btn.style.opacity = 1;
}
