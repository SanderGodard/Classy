var dropDownH = "90vh";

function menuToggle() {
  var x = document.getElementById("mobileNav");
  if (x.style.height === dropDownH) {
    x.style.height = "0px";
    x.style.display = "none";

  } else {
    x.style.height = dropDownH;
    x.style.display = "block";

  }
  var a = document.getElementById("mobileMenu");
  if (a.innerHTML === "menu") {
    a.innerHTML = "clear";
  } else {
    a.innerHTML = "menu";
  }
  document.body.style.overflow = "hidden";
}
