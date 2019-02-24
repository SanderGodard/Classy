var sField = document.getElementById('searchField');
var sDiv = document.getElementById('search');
var results = [];

sField.addEventListener("keyup", searchCheck, event);

getDatabase();
function getDatabase() {
    //var s = this.value;
    
    var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //console.log(this.responseText);
        validSearches = JSON.parse(this.responseText);
        //console.log(results);
        vS = validSearches;
        vSL = validSearches.length;
        search = document.getElementById('searchField');
        search.addEventListener("keydown", searchCheck, event);
        search.addEventListener("keyup", searchCheck, event);


        results = document.getElementsByClassName('results')[0];
    }
  };
  xhttp.open("GET", "/HypeIT/elements/db_search.php", true);
  xhttp.send();
}
/*
function checkPhrase() {
  var s = this.value.toUpperCase;
  var valid = [];

  for(i=0; i<results.length; i++) {
    var p = 0;
    var object = results[i].toUpperCase;
    for(a=0; a<s.length; a++) {
      if(object[a] == s[a]) {
        p++;
      }
    }
    if(p==s.length) {
      valid.push(results[i]);
    }
  }
  console.log(valid);
}*/



function searchCheck(x) {

  if(x.keyCode !== 38 && x.keyCode !== 40 && x.keyCode !== 13) {
  
  
  
    valid = [];
    sValue = search.value.toUpperCase();
    results.innerHTML = "";
    //alert("hello");
    for(i=0; i<vSL; i++) {
      v = vS[i].toUpperCase();
      var p = 0;
      //console.log(v);
        for(a=0; a<sValue.length; a++) {
          if(v[a]==sValue[a]) {
            p++;
          }
  
        }
      //console.log(p);
      if(p==sValue.length) {
          if(sValue!=0) {
            //valid.push(vS[i]);
            btn = document.createElement("DIV");
            link = document.createElement("A");
  
  
            link.innerHTML = vS[i];
            if(i>3) {
              link.setAttribute('href', "/HypeIT/produkter/menn/gensere/?p=" + (parseInt(i)-3));
              console.log(i);
            }
            else {
              link.setAttribute('href', "/HypeIT/produkter/brands/browse/?b=" + vS[i]);
            }
            link.className = "result";
            btn.appendChild(link);
            results.appendChild(btn);
          }
      }
  
    }
    //console.log(valid);
  
  
  
  
  }
  
  }
