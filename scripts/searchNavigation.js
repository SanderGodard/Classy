var p = -1;
document.getElementsByClassName('search')[0].addEventListener("keydown", navigation, event);
document.getElementsByClassName('results')[0].addEventListener("mouseover", mouseHover, event);

setInterval(updateList, 100);

function updateList() {
  result = document.getElementsByClassName('results')[0];
}


function mouseHover(x) {
  r = document.getElementsByClassName('result');
  for(var i=0; i< result.children-1; i++) {
    if(x.target == r[i]) {
      p = i;
      r[i].classList.add('activeResult');
      r[i-1].classList.remove('activeResult');
      r[i+1].classList.remove('activeResult');
    }
  }
}

  function navigation(x) {

if(result.childElementCount != 0) {




  if(x.keyCode === 38 /*Up-arrow*/)  {
    //alert("Hello");
    x.preventDefault();
    if(p>0) {
      p--;
    }
    if(p==result.childElementCount) {
      result.children[p-2].classList.remove("activeResult");
    }
    else {
      result.children[p+1].classList.remove("activeResult");
        if(p!=0) {
          result.children[p-1].classList.remove("activeResult");
        }
    }
    console.log(p);

    result.children[p].classList.add("activeResult");


  }
  if(x.keyCode === 40 /*Down-arrow*/)  {
    //alert("ello'");
    x.preventDefault();
    if(p==-1) {
      p=0;
    }
    else {
      if(p<result.childElementCount-1) {
        p++;
      }
    }

    console.log(p);
      result.children[p].classList.add("activeResult");


    if(p==result.childElementCount-1) {
      result.children[p-1].classList.remove("activeResult");
    }
    else {
      result.children[p+1].classList.remove("activeResult");

        if(p!=0) {
          result.children[p-1].classList.remove("activeResult");
        }
    }



  }
  if(x.keyCode === 13 /*Enter key*/) {
    if(document.getElementsByClassName('activeResult')[0] != undefined) {
      var href = document.getElementsByClassName('activeResult')[0].children[0].attributes.href.textContent;
      console.log(href);
      location.href = href;
    }
  }




}

  }
