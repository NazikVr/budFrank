<?php
$tt = [
  "contacts" => [
    "ua" => "Контакти",
    "rus" => "Контакты",
    "en" => "Contacts",
    "den" => "Kontakte",
    "sp" => "Contactos",
  ],
  "company" => [
    "ua" => "БУДФРАНК",
    "rus" => "БУДФРАНК",
    "en" => "BUDFRANK",
    "den" => "BUDFRANK",
    "sp" => "BUDFRANK",
  ],
  "title" => [
    "ua" => "Будівельна компанія",
    "rus" => "Строительная компания",
    "en" => "Construction company",
    "den" => "Bauunternehmen",
    "sp" => "Empresa constructora",
  ],
  "prefabricated_houses" => [
    "ua" => "Збірні будинки",
    "rus" => "Сборные дома",
    "en" => "Prefabricated houses",
    "den" => "Fertighäuser",
    "sp" => "Casas prefabricadas",
  ],
  "text" => [
    "ua" => "Ми виготовляємо збірні<br>
    будинки, готелі, офіси, лазні,<br>
    а також дерев'яні конструкції<br>
    за унікальною американською<br>
    технологією «MITEK»<br>",
    "rus" => "Сборные дома",
    "en" => "Prefabricated houses",
    "den" => "Fertighäuser",
    "sp" => "Casas prefabricadas",
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
<html lang="en" class="page">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/style.css">
    <title>
      <?php echo $tt["company"][$lng] ?>
    </title>
  </head>

  <body class="page__body">

    <div style="position: absolute; width: 100%; height: 100vh; z-index: -1;">
      <div class="slider">
        <div class="slider-item">
          <div class="slider-image"></div>
        </div>
        <div class="slider-item">

          <div class="slider-image-2"></div>
        </div>
        <div class="slider-item">

          <div class="slider-image-3"></div>
        </div>
      </div>
    </div>

    <header class="header">
      <div class="container">
        <div class="header__content">
          <a href="/?lang=<?php echo $lng ?>" class="header__logo"></a>
          <div class="header__sub">
            <a href="./contact.php?lang=<?php echo $lng ?>" class="header__contact">
              <?php echo $tt["contacts"][$lng] ?>
            </a>
            <select class="header__lang lang">
              <a href="?lang=ua">
                <option class="ukr" value="Укр">
                  Укр
                </option>
              </a>
              <option value="Рус">Рус</option>
              <a href="./?lang=en">
                <option value="Eng">
                  Eng
                </option>
              </a>
              <option value="Нем">Нем</option>
              <option value="Исп">Исп</option>
            </select>
          </div>


        </div>
      </div>
    </header>

    <section class="contents" style="position: absolute;">
      <div class="container">

        <div class="contents__wrapper-first">
          <div class="contents__wrapper-second">
            <div class="contents__subtitle">
              <?php echo $tt["title"][$lng] ?>
            </div>
            <div class="contents__rec"></div>
          </div>

          <div class="contents__title">
            <?php echo $tt["company"][$lng] ?>
          </div>
          <div class="contents__text-first">
            <?php echo $tt["prefabricated_houses"][$lng] ?>
          </div>
          <div class="contents__text-second">
          <?php echo $tt["text"][$lng] ?>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="slick.min.js"></script>
    <script src="main.js"></script>
  </body>

</html>