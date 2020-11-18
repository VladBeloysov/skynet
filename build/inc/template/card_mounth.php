<div class="card">
  <div class="card__title"><?=$mounth['pay_period'];?> месяц<?=$ending;?></div>
  <a class="card__content card__content--next historyAPI" href="details.php?tarif=<?=$key;?>&mounth=<?=$mounth['ID'];?>">
    <div class="card__price"><?=$averagePrice;?> ₽/мес</div>
    <p class="card__text">Разовый платеж — <?=$mounth['price'];?> ₽</p>
  </a>
</div>
