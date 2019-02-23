x = document.getElementById('Cookies');
x.children[2].children[1].addEventListener("click", hideCookies);

if(sessionStorage.getItem("cookiesClicked") != true) {
  x.style.display = "block";
}


function hideCookies() {
  x.style.display = 'none';
  sessionStorage.setItem("cookiesClicked", true);
}

if (sessionStorage.getItem("cookiesClicked")) {
  hideCookies();
}
