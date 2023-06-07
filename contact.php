<?php
$tt = [
  "contacts" => [
    "ua" => "Контакти",
    "rus" => "Контакты",
    "en" => "Contacts",
    "de" => "Kontakte",
    "sp" => "Contactos",
  ],
  "name1" => [
    "ua" => "Лук'янчук М.О.",
    "rus" => "Лукьянчук Н.О.",
    "en" => "Lukyanchuk M.O.",
    "de" => "Lukyanchuk M.O.",
    "sp" => "Lukyanchuk M.O.",
  ],
  "status1" => [
    "ua" => "Засновник",
    "rus" => "Учредитель",
    "en" => "Founder",
    "de" => "Gründer",
    "sp" => "Fundador",
  ],
  "name2" => [
    "ua" => "Чоповенко О.Г.",
    "rus" => "Чоповенко А.Г.",
    "en" => "Chopovenko O.G.",
    "de" => "Chopovenko O.G.",
    "sp" => "Chopovenko O.G.",
  ],
  "status2" => [
    "ua" => "Технічний директор",
    "rus" => "Технический директор",
    "en" => "Technical director",
    "de" => "Technischer Leiter",
    "sp" => "Director técnico",
  ],
  "office" => [
    "ua" => "Головний офіс",
    "rus" => "Головной офис",
    "en" => "Head Office",
    "de" => "Hauptsitz",
    "sp" => "Contactos",
  ],
  "adress" => [
    "ua" => "Україна Львів, 79000,<br> вул. Стрийська, 45",
    "rus" => "Украина г. Львов, 79000,<br> ул. Стрыйская, 45",
    "en" => "Ukraine Lviv, 79000,<br> Stryyska St, 45",
    "de" => "Ukraine Lemberg, 79000,<br> Stryyska St, 45",
    "sp" => "Ucrania Lviv, 79000,<br> Stryyska St, 45",
  ],
  "message" => [
    "ua" => "Залишайтесь <br>
    на зв’язку",
    "rus" => "Оставайтесь <br>
    на связи",
    "en" => "Stay <br>
    in touch",
    "de" => "Bleiben Sie <br>
    in Kontakt",
    "sp" => "Quédate <br>
    en contacto",
  ],
];

$lng = "ua";
if (!empty($_REQUEST["lang"])) {
  $lng = $_REQUEST["lang"];
}
if (empty($tt["contacts"][$lng])) {
  $lng = "ua";
}
?>
<!DOCTYPE html>
<html lang="en">

  <head class="page">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>
      <?php echo $tt["contacts"][$lng] ?>
    </title>
  </head>

  <body class="page__body">
    <header class="header">
      <div class="container">
        <div class="header__content">
          <a href="/?lang=<?php echo $lng ?>" class="header__logo header__logo--cont"></a>
          <div class="header__sub">
            <a href="./contact.php?lang=<?php echo $lng ?>" class="header__contact header__contact--cont">
              <?php echo $tt["contacts"][$lng] ?>
            </a>
            <select class="header__lang lang header__lang--cont">
              <option value="Укр">Укр</option>
              <option value="Рус">Рус</option>
              <option value="Eng">Eng</option>
              <option value="Нем">Нем</option>
              <option value="Исп">Исп</option>
            </select>
          </div>


        </div>
      </div>
    </header>

    <section class="page__content">
      <div class="container">
        <div class="content">
          <article class="content__left left">
            <div class="left__founder">
              <img src="/images/founder.png" class="left__image" alt="Лук'янчук М.О.">
              <div class="left__name">
                <?php echo $tt["name1"][$lng] ?>
              </div>
              <div class="left__pos">
                <?php echo $tt["status1"][$lng] ?>
              </div>
            </div>
            <div class="left__boss">
              <img src="/images/boss.png" class="left__image" alt="Чоповенко О.Г.">
              <div class="left__name">
                <?php echo $tt["name2"][$lng] ?>
              </div>
              <div class="left__pos">
                <?php echo $tt["status2"][$lng] ?>
              </div>
            </div>
          </article>
          <article class="content__right right">
            <div class="right__el right__el--title">
              <div class="right__icon right__icon--empty"></div>
              <div class="right__text right__text--title">
                <?php echo $tt["office"][$lng] ?>
              </div>
            </div>
            <div class="right__el">
              <div class="right__icon right__icon--adr"></div>
              <a target="_blank" href="https://goo.gl/maps/V3TYuT43XSTMpSrF6" class="right__text">
                <?php echo $tt["adress"][$lng] ?>
              </a>
            </div>
            <div class="right__el">
              <div class="right__icon right__icon--tel"></div>
              <a href="tel:+380675992818" class="right__text">
                <span style="color: #878E92;">+38&#160;</span>
                <span style="color: #878E92; font-weight: 700">067&#160;</span>
                599-28-18
              </a>
            </div>
            <div class="right__el">
              <div class="right__icon right__icon--email"></div>
              <a href="mailto:budfrank.ua@gmail.com" class="right__text">
                budfrank.ua
                <span style="color: #878E92;">
                  @gmail.com
                </span>
              </a>
            </div>
            <div class="right__el">
              <div class="right__icon right__icon--clock"></div>
              <div class="right__text">
              <span style="color: #878E92;">Пн...Сб:&#160;</span>9:00 — 18:00&#160;&#160;&#160;<span style="color: #878E92;">Неділя:&#160;</span> вихідний
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <footer class="page__footer footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__content">
            <div class="footer__text">
              <?php echo $tt["message"][$lng] ?>
            </div>
            <div class="footer__icons">
              <a href="https://www.facebook.com/profile.php?id=100092285056429" target="_blank"
                style="text-decoration: none;">
                <img src="images/icon/facebook.png" alt="facebook" class="footer__icon">
              </a>
              <a href="https://www.instagram.com/budfrank.ua/" target="_blank" style="text-decoration: none;">
                <img src="images/icon/inst.png" alt="instagram" class="footer__icon">
              </a>
              <a href="https://www.tiktok.com/@budfrank.ua" target="_blank" style="text-decoration: none;">
                <img src="images/icon/tt.png" alt="tiktok" class="footer__icon">
              </a>
              <a href="https://www.youtube.com/@BUDFRANK/about" target="_blank" style="text-decoration: none;">
                <img src="images/icon/yt.png" alt="youtube" class="footer__icon">
              </a>
              <a href="https://ru.pinterest.com/bud_frank/" target="_blank" style="text-decoration: none;">
                <img src="images/icon/pint.png" alt="pinterest" class="footer__icon">
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>