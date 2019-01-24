var dropDownH = 200;

function menuToggle() {
  var x = document.getElementById("mobileNav");
  if (x.style.height === dropDownH + "px") {
    x.style.height = "0px";
    x.style.display = "none";

  } else {
    x.style.height = dropDownH + "px";
    x.style.display = "block";
  }
  var a = document.getElementById("mobileMenu");
  if (a.innerHTML === "menu") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "menu";
  }
}
