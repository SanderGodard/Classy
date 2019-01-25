x = document.getElementById('Cookies');
x.children[2].children[1].addEventListener("click", hideCookies);



function hideCookies() {
  x.style.display = 'none';
  sessionStorage.setItem("cookiesClicked", true);
}

if (sessionStorage.getItem("cookiesClicked")) {
  hideCookies();
}
