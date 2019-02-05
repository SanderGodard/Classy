document.getElementById('SearchIcon').addEventListener("mouseup", hideBtn);
icon = document.getElementById('SearchIcon');
field = document.getElementsByClassName('search')[0];
searchDiv = document.getElementsByClassName('searchDiv')[0];

function hideBtn() {
  icon.style.display = "none";
  field.style.display = "inline";
  document.getElementById('searchField').focus();
}



window.addEventListener("mouseup", function(event) {
  if(event.target != searchDiv && event.target.parentNode != searchDiv && event.target.parentNode != field) {

    icon.style.display = "inline";
    field.style.display = "none";
    p = -1;

  }
})
