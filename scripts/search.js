validSearches = ["Supreme", "Gucci", "Headset", "Skjermer", "Telefoner", "Genser", "Bukser", "Sokker", "Sko", "Armbånd", "Klokker"];
vS = validSearches;
vSL = validSearches.length;
search = document.getElementById('searchField');
search.addEventListener("keydown", searchCheck, event);
search.addEventListener("keyup", searchCheck, event);


results = document.getElementsByClassName('results')[0];

function searchCheck(x) {

if(x.keyCode !== 38 && x.keyCode !== 40 && x.keyCode !== 13) {




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
          btn = document.createElement("DIV");
          link = document.createElement("A");


          link.innerHTML = vS[i];
          link.setAttribute('href', "/HypeIT/produkter/" + vS[i].toLowerCase())
          link.className = "result";
          btn.appendChild(link);
          results.appendChild(btn);
        }
    }

  }




}

}
