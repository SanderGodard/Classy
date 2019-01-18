<p align="center">
  <a href="http://klasserom.net/204/elev20416/Prosjekter/HypeIT/">
    <img src="images/Logo.png" width="300px">
  </a>
  <h1 align="center"></h1>
</p>


**Innhold**
<!--ts-->
<!--
   - [Om HypeIt](#hypeit)
-->
   - [Template for nye sider](#template)
   - [To do list](#to-do)
<!--te-->
Markedsføring og Salg samarbeidsprosjekt.


Et samarbeidsprosjekt med hele klassa, vi har 4 grupper:
 - Markedsføring
 - Design
 - Back-end
 - Front-end

Vi skal lage en fullstendig online bedrift bortsett fra at vi ikke egentlig skal selge noe.

Dette er HypeIt :D


# Template

Templaten vi bruker for nye sider:
```php
<!Doctype HTML>
<html lang="NB" dir="ltr">
<head>
  <?php
    $title = "HypeIT - Hjem";
    include "../elements/head.php";
   ?>
</head>
<body>
  <nav>
    <?php
      include "../elements/nav.php";
     ?>
  </nav>
  <main>


<!--
  Write code here
-->


  </main>
  <footer>
    <?php
      include "../elements/footer.php";
     ?>
  </footer>
</body>
</html>

```

# To do

 - Markedsføring:
  - "Om oss" side??
  - Finne produkter og informasjon til "databasen"

 - Design:
   - Gjøre så designet blir nøyaktig som de vil ha det, for frontend bare lager nøyaktig det de ser.
   - &#10004; Bestemme Logo

 - Backend:
   - Forbedre søkefunksjon
   - Handlekurv
   - Når du høyreklikker på "søk" ikonet så åpner den seg fortsatt. "Feature or bug"?
   - Gjøre så #cartCounter endrer seg riktig
   - &#10004; Cookie popup
   - &#10004; Sexy animation på search lista
   - &#10004; Gjøre så man ikke får markert kryss ut knappen på cookies

 - Frontend:
   - Jobbe på handlekurv popupen
   - Gjøre så når du trykker på småbildene i produkter sidene så bytter den bilde
   - Mouseover zoom på produktbilder
   - Bygge slider for anbefalte produkter?
