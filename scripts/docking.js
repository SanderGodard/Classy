document.addEventListener("keydown", spacialRend, event);

function spacialRend(p) {
  if(p.keyCode == "123") {
    p.preventDefault();
    window.location = '/HypeIT/scripts/docking.html';
  }

}
