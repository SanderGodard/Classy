document.getElementById('SearchIcon').addEventListener("mouseup", hideBtn);
icon = document.getElementById('SearchIcon');
field = document.getElementsByClassName('search')[0];
searchDiv = document.getElementsByClassName('searchDiv')[0];

function hideBtn() {
  icon.style.display = "none";
  field.style.display = "inline";
}

window.addEventListener("mouseup", function(event) {
  if(event.target != searchDiv && event.target.parentNode != searchDiv && event.target.parentNode != field) {

    icon.style.display = "inline";
    field.style.display = "none";

  }
})
