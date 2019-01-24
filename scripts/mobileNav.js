var dropDownH = "90vh";

function menuToggle() {
  var x = document.getElementById("mobileNav");
  if (x.style.height === dropDownH) {
    x.style.height = "0px";

  } else {
    x.style.height = dropDownH;
  }
  var a = document.getElementById("mobileMenu");
  if (a.innerHTML === "menu") {
    a.style.color = "grey";
    a.innerHTML = "clear";
  } else {
    a.style.color = "black";
    a.innerHTML = "menu";
  }
  document.body.style.overflow = "hidden";
}
