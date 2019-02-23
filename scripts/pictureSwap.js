var primary = document.getElementById('storBilde');
var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var img3 = document.getElementById('img3');
var img4 = document.getElementById('img4');
var img5 = document.getElementById('img5');
var img6 = document.getElementById('img6');
var img7 = document.getElementById('img7');
var img8 = document.getElementById('img8');
var img9 = document.getElementById('img9');
var smabilde = document.getElementById('Gliscor');
var g=1;
var arrowNext = document.getElementById('arrowNext');
var arrowPrev = document.getElementById('arrowPrev');

arrowNext.addEventListener("click", nextPic);

function nextPic() {

      if(primary.src == document.getElementById('img' + (smabilde.childElementCount - 2)).src){
        g=1;
        primary.src = img1.src;
        console.log("Bilde 1");
      }
      else {
        primary.src = document.getElementById('img' + (g+1)).src;
        console.log("Elsen kjørte");
        g++;
      }

}

arrowPrev.addEventListener("click", prevPic)

function prevPic() {

      if(primary.src == img1.src){
        g=(smabilde.childElementCount - 2);
        primary.src = document.getElementById('img' + (smabilde.childElementCount - 2)).src;
        console.log("Bilde 1");
      }
      else {
        primary.src = document.getElementById('img' + (g-1)).src;
        console.log("Elsen kjørte");
        g--;
      }

}

img1.addEventListener("click", swapPic1);

function swapPic1() {
  primary.src = img1.src;
}

img2.addEventListener("click", swapPic2);

function swapPic2() {
  primary.src = img2.src;
}

img3.addEventListener("click", swapPic3);

function swapPic3() {
  primary.src = img3.src;
}

img4.addEventListener("click", swapPic4);

function swapPic4() {
  primary.src = img4.src;
}

img5.addEventListener("click", swapPic5);

function swapPic5() {
  primary.src = img5.src;
}

img6.addEventListener("click", swapPic6);

function swapPic6() {
  primary.src = img6.src;
}

img7.addEventListener("click", swapPic7);

function swapPic7() {
  primary.src = img7.src;
}

img8.addEventListener("click", swapPic8);

function swapPic8() {
  primary.src = img8.src;
}

img9.addEventListener("click", swapPic9);

function swapPic9() {
  primary.src = img9.src;
}
