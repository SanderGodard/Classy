searchField = document.getElementById('searchField');
searchField.addEventListener("keyup", search);
//document.getElementsByClassName('results')[0].style.display = "none";
//searchField.addEventListener("click", function(){document.getElementsByClassName('results')[0].style.display = "flex";});
validSearches = [];
results = document.getElementsByClassName('results')[0].childElementCount;


for(i=0; i<results; i++) {
  result = document.getElementsByClassName('result')[i].innerHTML.toUpperCase();
  validSearches[i] = result;
}
console.log(validSearches);
function search() {
//Making elements that were once filtered out visible again
for(i=0; i<results; i++) {
  document.getElementsByClassName('results')[0].children[i].children[0].style.display = "none";
}
//Ending previous comment
  search = searchField.value.toUpperCase();
    for(i=0; i<validSearches.length; i++) {
      valid = validSearches[i];
        for(o=0; o<search.length; o++) {
          validArray = [];
          searchArray = [];
          for(m=0; m<valid.length; m++) {
            validArray.push(valid[m])
          }
          for(m=0; m<search.length; m++) {
            searchArray.push(search[m])
          }

          if(validArray[o] == searchArray[o]) {
            //alert("Equal");

                document.getElementsByClassName('results')[0].children[i].children[0].style.display = "flex";


          }
          else {
            document.getElementsByClassName('results')[0].children[i].children[0].style.display = "none";
          }

        }

    }
  console.log(search);

}
