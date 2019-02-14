var infernape = document.getElementsByClassName("farge")[0];

infernape.children[0].children[0].style.opacity = "0"
infernape.children[1].children[0].style.opacity = "0"
infernape.children[2].children[0].style.opacity = "0"
infernape.children[3].children[0].style.opacity = "0"
infernape.children[4].children[0].style.opacity = "0"
infernape.children[5].children[0].style.opacity = "0"

infernape.addEventListener("click", allOutPummeling, event);
  function allOutPummeling(x) {
    for (i=0; i<infernape.childElementCount; i++) {
      if (x.target == infernape.children[i] || x.target == infernape.children[i].children[0]) {
        infernape.children[i].children[0].style.opacity = "1";
        for (g=0; g<infernape.childElementCount; g++) {
          if (g != i) {
            infernape.children[g].children[0].style.opacity = "0"
          }
        }
      }
    }

  }
