<?php
include 'inc/data.php';
include 'inc/renderTemplate.php';
include 'inc/color.php';
include 'inc/rangePrice.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Список тарифов</title>
  <link href="main.css" rel="stylesheet">
</head>
<body>
  <div class="content" id="contentHolder">
      <div class="content__list">
          <?php
              foreach ($obj['tarifs'] as $key => $tarif) {
                  $rangePrice = rangePrice($tarif['tarifs']);
                  $color = color($tarif['title']);
                  renderTemplate('inc/template/card_tarif.php', ['tarif' => $tarif, 'rangePrice' => $rangePrice, 'color' => $color, 'key' => $key]);
              }
          ?>
      </div>
  </div>
  <?php include 'inc/footer.php';?>
</body>
</html>
