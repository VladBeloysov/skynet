<div class="card">
    <div class="card__title">Тариф "<?=$tarif['title'];?>"</div>
    <a class="card__content card__content--next historyAPI" href="tariff.php?tarif=<?=$key;?>">
        <div class="card__speed <?=$color;?>"><?=$tarif['speed'];?>Мбит/с</div>
        <div class="card__price"><?=$rangePrice;?> ₽/мес</div>
        <?php
            if($tarif['free_options']) {
                foreach ($tarif['free_options'] as $option ) {
                    ?><p class="card__text"><?=$option;?></p><?php
                }
            }
        ?>
    </a>
    <div class="card__footer"><a class="card__link" target="_blank" href="<?=$tarif['link'];?>">узнать пОдробнее на сайте www.sknt.ru</a></div>
</div>
