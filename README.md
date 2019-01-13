# HypeIT
Markedsføring og Salg samarbeidsprosjekt.


Et samarbeidsprosjekt med hele klassa, vi har 4 grupper:
 - Front-end
 - Back-end
 - Design
 - Markedsføring

Vi skal lage en fullstendig online bedrift bortett bra at vi ikke egentlig skal selge noe.

Dette er HypeIt :D



Current new page template we use (Will be constantly updated):
```html
<!Doctype HTML>
<html lang="NB" dir="ltr">

<head>
  <title>HypeIT</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="1IKT-SK 2019">
  <link rel="shortcut icon" href="/images/favicon.ico">
  <link rel="stylesheet" href="/styling/styling.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#FFFFFF">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#FFFFFF">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
  <script async src="/scripts/searchField.js"></script>
  <script async src="/scripts/search.js"></script>
</head>

<body>
  <nav>
    <div class="Logo">

    </div>
    <div class="RightNav">
      <div class="Nav">
        <a href="/produkter/">Produkter</a>
        <a href="/produkter/menn/">Menn</a>
        <a href="/produkter/damer/">Damer</a>
        <a href="/produkter/annet/">Annet</a>
        <a href="/store/cart/" class="Material">shopping_cart</a>
      </div>
      <div class="NavPart">
        <div class="searchDiv">
          <a href="javascript:void(0)" id="SearchIcon" class="Material" onclick="/scripts/searchField.js">search</a>

          <div class="search">
            <input autofocus type="text" id="searchField" placeholder="Search...">
            <div class="results">
              <div><a href="#" class="result">PC</a></div>
              <div><a href="#" class="result">Telefon</a></div>
              <div><a href="#" class="result">Skjermer</a></div>
              <div><a href="#" class="result">Sajermer</a></div>
              <div><a href="#" class="result">Headset</a></div>
              <div><a href="#" class="result">Genser</a></div>
              <div><a href="#" class="result">Bukser</a></div>
              <div><a href="#" class="result">Sko</a></div>
              <div><a href="#" class="result">Klokker</a></div>
              <div><a href="#" class="result">Armbånd</a></div>
              <div><a href="#" class="result">Ringer</a></div>
            </div>
          </div>

        </div>
      </div>
      <div class="MobileNav">
        <a href="javascript:void(0)" class="Material">menu</a>
      </div>
    </div>
  </nav>
  <main>



  </main>
  <footer>

  </footer>
</body>

</html>
```
