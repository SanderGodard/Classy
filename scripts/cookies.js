x = document.getElementById('Cookies');
x.addEventListener("click", hideCookies);



function hideCookies() {
  x.style.display = 'none';
  sessionStorage.setItem("cookiesClicked", true);
}

if (sessionStorage.getItem("cookiesClicked")) {
  hideCookies();
}
